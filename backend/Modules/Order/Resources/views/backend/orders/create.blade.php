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
    <div class="card">
        <div class="card-body text-center">
            <h3>Manual Order Creation</h3>
            <p>Order creation is typically handled on the frontend. Backend manual creation is coming soon.</p>
            <a href="{{ route('backend.orders.index') }}" class="btn btn-primary">Back to Orders</a>
        </div>
    </div>
@endsection
