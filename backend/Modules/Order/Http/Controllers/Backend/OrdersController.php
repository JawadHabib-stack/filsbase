<?php

namespace Modules\Order\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class OrdersController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Orders';

        // module name
        $this->module_name = 'orders';

        // directory path of the module
        $this->module_path = 'order::backend';

        // module icon
        $this->module_icon = 'fa-solid fa-cart-shopping';

        // module model name, path
        $this->module_model = "Modules\Order\Models\Order";
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        // Analytics Data
        $analytics = [
            'total_orders' => $module_model::count(),
            'total_revenue' => $module_model::where('payment_status', 'Paid')->sum('total_amount'),
            'pending_orders' => $module_model::where('status', 'Pending')->count(),
            'completed_orders' => $module_model::where('status', 'Completed')->count(),
            'cancelled_orders' => $module_model::where('status', 'Cancelled')->count(),
        ];
        $analytics['aov'] = $analytics['total_orders'] > 0 ? $analytics['total_revenue'] / $analytics['total_orders'] : 0;

        $$module_name = $module_model::paginate(15);

        logUserAccess($module_title.' '.$module_action);

        return view(
            "{$module_path}.{$module_name}.index_datatable",
            compact('module_title', 'module_name', "{$module_name}", 'module_icon', 'module_name_singular', 'module_action', 'analytics')
        );
    }

    /**
     * Retrieves the data for the index page of the module.
     *
     * @return Illuminate\Http\JsonResponse
     */
    public function index_data()
    {
        $module_model = $this->module_model;
        $query = $module_model::with('user')->select('orders.*');

        return DataTables::of($query)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;
                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('user_id', function ($data) {
                return $data->user ? $data->user->name : 'Guest';
            })
            ->editColumn('total_amount', function ($data) {
                return '$' . number_format($data->total_amount, 2);
            })
            ->editColumn('status', function ($data) {
                $class = 'badge bg-secondary';
                if ($data->status == 'Completed') $class = 'badge bg-success';
                if ($data->status == 'Cancelled') $class = 'badge bg-danger';
                if ($data->status == 'Processing') $class = 'badge bg-info';
                if ($data->status == 'Shipped') $class = 'badge bg-primary';
                return '<span class="'.$class.'">'.$data->status.'</span>';
            })
            ->editColumn('payment_status', function ($data) {
                $class = 'badge bg-secondary';
                if ($data->payment_status == 'Paid') $class = 'badge bg-success';
                if ($data->payment_status == 'Failed') $class = 'badge bg-danger';
                return '<span class="'.$class.'">'.$data->payment_status.'</span>';
            })
            ->editColumn('updated_at', function ($data) {
                return $data->updated_at->diffForHumans();
            })
            ->rawColumns(['status', 'payment_status', 'action'])
            ->make(true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $$module_name_singular = $module_model::with(['user', 'items.product'])->findOrFail($id);

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return view(
            "{$module_path}.orders.show",
            compact('module_title', 'module_name', 'module_icon', "{$module_name_singular}", 'module_name_singular', 'module_action')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $module_model = $this->module_model;
        $order = $module_model::findOrFail($id);

        $request->validate([
            'status' => 'required|string',
            'payment_status' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        $previousStatus = $order->getOriginal('status');

        $order->update($request->only('status', 'payment_status', 'notes'));

        if ($order->wasChanged('status') && $order->user && $order->user->email) {
            try {
                \Illuminate\Support\Facades\Mail::to($order->user->email)
                    ->send(new \App\Mail\OrderStatusMail($order, $previousStatus));
            } catch (\Exception $e) {
                \Illuminate\Support\Facades\Log::error('Order status email failed: '.$e->getMessage());
            }
        }

        flash("Order Updated Successfully")->success()->important();

        logUserAccess($this->module_title.' Update | Id: '.$order->id);

        return redirect()->route("backend.orders.show", $order->id);
    }
}
