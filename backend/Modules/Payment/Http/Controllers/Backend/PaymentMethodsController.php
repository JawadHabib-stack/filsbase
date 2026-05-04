<?php

namespace Modules\Payment\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Http\Request;
use Modules\Payment\Models\PaymentMethod;
use Illuminate\Support\Str;

class PaymentMethodsController extends BackendBaseController
{
    use Authorizable;

    public function __construct()
    {
        parent::__construct();
        
        $this->module_title = 'Payment Methods';
        $this->module_name = 'payment_methods';
        $this->module_path = 'payment::backend.payment_methods';
        $this->module_icon = 'fa-solid fa-credit-card';
        $this->module_model = "Modules\Payment\Models\PaymentMethod";
    }

    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $$module_name = $module_model::orderBy('order')->get();

        return view("{$module_path}.index", compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_name_singular', "$module_name"));
    }

    public function create()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_name_singular = Str::singular($module_name);

        return view("{$module_path}.create", compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_name_singular'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'status' => 'required',
        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        
        PaymentMethod::create($data);

        return redirect()->route("backend.{$this->module_name}.index")->with('success', 'Payment method created successfully.');
    }

    public function edit($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_name_singular = Str::singular($module_name);

        $$module_name_singular = PaymentMethod::findOrFail($id);

        return view("{$module_path}.edit", compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_name_singular', "$module_name_singular"));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'status' => 'required',
        ]);

        $payment_method = PaymentMethod::findOrFail($id);
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        $payment_method->update($data);

        return redirect()->route("backend.{$this->module_name}.index")->with('success', 'Payment method updated successfully.');
    }

    public function destroy($id)
    {
        $payment_method = PaymentMethod::findOrFail($id);
        $payment_method->delete();

        return redirect()->route("backend.{$this->module_name}.index")->with('success', 'Payment method deleted successfully.');
    }
}
