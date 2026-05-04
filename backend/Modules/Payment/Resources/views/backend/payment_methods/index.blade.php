@extends('backend.layouts.app')

@section('title') {{ $module_title }} @endsection

@section('content')
<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h4 class="mb-0"><i class="{{ $module_icon }} me-2"></i>{{ $module_title }}</h4>
            <a href="{{ route("backend.{$module_name}.create") }}" class="btn btn-primary btn-sm"><i class="fa-solid fa-plus me-1"></i> Add New</a>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Order</th>
                        <th class="text-end">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($$module_name as $row)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><strong>{{ $row->name }}</strong></td>
                        <td><code>{{ $row->slug }}</code></td>
                        <td>
                            @if($row->status == 'Enabled')
                                <span class="badge bg-success">Enabled</span>
                            @else
                                <span class="badge bg-danger">Disabled</span>
                            @endif
                        </td>
                        <td>{{ $row->order }}</td>
                        <td class="text-end">
                            <a href="{{ route("backend.{$module_name}.edit", $row->id) }}" class="btn btn-info btn-sm text-white"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route("backend.{$module_name}.destroy", $row->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
