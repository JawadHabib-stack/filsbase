@extends("backend.layouts.app")

@section("title")
    {{ __($module_action) }} {{ __($module_title) }}
@endsection

@section("breadcrumbs")
    <x-backend.breadcrumbs>
        <x-backend.breadcrumb-item route='{{ route("backend.$module_name.index") }}' icon="{{ $module_icon }}">
            {{ __($module_title) }}
        </x-backend.breadcrumb-item>
        <x-backend.breadcrumb-item type="active">{{ __($module_action) }}</x-backend.breadcrumb-item>
    </x-backend.breadcrumbs>
@endsection

@section("content")
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Order Items</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-end">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($$module_name_singular->items as $item)
                                <tr>
                                    <td>
                                        @if($item->product)
                                            <a href="{{ route('backend.products.show', $item->product_id) }}">{{ $item->product_name }}</a>
                                        @else
                                            {{ $item->product_name }}
                                        @endif
                                    </td>
                                    <td class="text-center">${{ number_format($item->price, 2) }}</td>
                                    <td class="text-center">{{ $item->quantity }}</td>
                                    <td class="text-end">${{ number_format($item->total, 2) }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="3" class="text-end">Grand Total</th>
                                    <th class="text-end text-primary h5">${{ number_format($$module_name_singular->total_amount, 2) }}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Order Notes</h5>
                </div>
                <div class="card-body">
                    <p>{{ $$module_name_singular->notes ?: 'No notes provided.' }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Order Summary</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('backend.orders.update', $$module_name_singular->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        
                        <div class="mb-3">
                            <label class="form-label">Order Number</label>
                            <input type="text" class="form-control" value="{{ $$module_name_singular->order_number }}" readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Order Status</label>
                            <select name="status" class="form-select">
                                @foreach(['Pending', 'Processing', 'Shipped', 'Completed', 'Cancelled'] as $status)
                                    <option value="{{ $status }}" {{ $$module_name_singular->status == $status ? 'selected' : '' }}>{{ $status }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Payment Status</label>
                            <select name="payment_status" class="form-select">
                                @foreach(['Pending', 'Paid', 'Failed'] as $p_status)
                                    <option value="{{ $p_status }}" {{ $$module_name_singular->payment_status == $p_status ? 'selected' : '' }}>{{ $p_status }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Payment Method</label>
                            <input type="text" class="form-control" value="{{ $$module_name_singular->payment_method }}" readonly>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Update Status</button>
                    </form>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="card-title mb-0">Customer Details</h5>
                </div>
                <div class="card-body">
                    <p><strong>Name:</strong> {{ $$module_name_singular->user ? $$module_name_singular->user->name : 'Guest' }}</p>
                    <p><strong>Email:</strong> {{ $$module_name_singular->user ? $$module_name_singular->user->email : 'N/A' }}</p>
                </div>
            </div>

            @if($$module_name_singular->shipping_details)
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Shipping Address</h5>
                </div>
                <div class="card-body">
                    @php $ship = $$module_name_singular->shipping_details; @endphp
                    <p class="mb-0">
                        {{ $ship['address'] ?? '' }}<br>
                        {{ $ship['city'] ?? '' }}, {{ $ship['state'] ?? '' }} {{ $ship['zip'] ?? '' }}<br>
                        {{ $ship['country'] ?? '' }}
                    </p>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
