@extends('filsbase.layouts.user')

@section('title', 'Change Password')

@section('user_content')
<h3 class="mb-4">Change Password</h3>

{{ html()->form("PATCH", route("frontend.users.changePasswordUpdate"))->class('wow fadeInUp')->open() }}
    
    <div class="row">
        <div class="col-md-12 mb-3 form-group">
            <label class="form-label text-muted small mb-1">New Password <span class="text-danger">*</span></label>
            {{ html()->password('password')->class('form-control')->required() }}
            @error('password')
                <small class="text-danger mt-1 d-block">{{ $message }}</small>
            @enderror
        </div>
        <div class="col-md-12 mb-3 form-group">
            <label class="form-label text-muted small mb-1">Confirm New Password <span class="text-danger">*</span></label>
            {{ html()->password('password_confirmation')->class('form-control')->required() }}
            @error('password_confirmation')
                <small class="text-danger mt-1 d-block">{{ $message }}</small>
            @enderror
        </div>
    </div>

    <div class="mt-4 text-end">
        <button type="submit" class="btn-default">Update Password</button>
    </div>

{{ html()->form()->close() }}
@endsection
