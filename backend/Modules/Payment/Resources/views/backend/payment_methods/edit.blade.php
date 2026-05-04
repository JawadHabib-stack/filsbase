@extends('backend.layouts.app')

@section('title') Edit {{ $module_name_singular }} @endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="mb-0"><i class="{{ $module_icon }} me-2"></i>Edit {{ $module_name_singular }}</h4>
    </div>
    <div class="card-body">
        <form action="{{ route("backend.{$module_name}.update", $$module_name_singular->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $$module_name_singular->name }}" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="Enabled" {{ $$module_name_singular->status == 'Enabled' ? 'selected' : '' }}>Enabled</option>
                        <option value="Disabled" {{ $$module_name_singular->status == 'Disabled' ? 'selected' : '' }}>Disabled</option>
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3">{{ $$module_name_singular->description }}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Order</label>
                    <input type="number" name="order" class="form-control" value="{{ $$module_name_singular->order }}">
                </div>

                @if($$module_name_singular->slug == 'stripe')
                    <hr>
                    <h5>Stripe Configuration</h5>
                    <div class="col-md-6">
                        <label class="form-label">Stripe Public Key</label>
                        <input type="text" name="settings[public_key]" class="form-control" value="{{ $$module_name_singular->settings['public_key'] ?? '' }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Stripe Secret Key</label>
                        <input type="password" name="settings[secret_key]" class="form-control" value="{{ $$module_name_singular->settings['secret_key'] ?? '' }}">
                    </div>
                @elseif($$module_name_singular->slug == 'paypal')
                    <hr>
                    <h5>PayPal Configuration</h5>
                    <div class="col-md-6">
                        <label class="form-label">PayPal Client ID</label>
                        <input type="text" name="settings[client_id]" class="form-control" value="{{ $$module_name_singular->settings['client_id'] ?? '' }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">PayPal Client Secret</label>
                        <input type="password" name="settings[client_secret]" class="form-control" value="{{ $$module_name_singular->settings['client_secret'] ?? '' }}">
                    </div>
                @endif
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Update Payment Method</button>
                <a href="{{ route("backend.{$module_name}.index") }}" class="btn btn-light">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
