@extends('backend.layouts.app')

@section('title') Add {{ $module_name_singular }} @endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="mb-0"><i class="{{ $module_icon }} me-2"></i>Add {{ $module_name_singular }}</h4>
    </div>
    <div class="card-body">
        <form action="{{ route("backend.{$module_name}.store") }}" method="POST">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" placeholder="e.g. PayPal" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="Enabled">Enabled</option>
                        <option value="Disabled">Disabled</option>
                    </select>
                </div>
                <div class="col-12">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="3"></textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Order</label>
                    <input type="number" name="order" class="form-control" value="0">
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Save Payment Method</button>
                <a href="{{ route("backend.{$module_name}.index") }}" class="btn btn-light">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
