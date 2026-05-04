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
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">{{ __($module_action) }} Order #{{ $$module_name_singular->order_number }}</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('backend.orders.update', $$module_name_singular->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        
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
                            <label class="form-label">Notes</label>
                            <textarea name="notes" class="form-control" rows="4">{{ $$module_name_singular->notes }}</textarea>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('backend.orders.show', $$module_name_singular->id) }}" class="btn btn-secondary">Back to Details</a>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
