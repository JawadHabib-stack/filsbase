@extends('filsbase.layouts.user')

@section('title', 'Edit Profile')

@section('user_content')
<h3 class="mb-4">Edit Profile</h3>

{{ html()->modelForm($$module_name_singular, "PATCH", route("frontend.users.profileUpdate"))->acceptsFiles()->class('wow fadeInUp')->open() }}
    
    <div class="row mb-4">
        <div class="col-md-12 text-center mb-4">
            <div class="position-relative d-inline-block">
                @php $avatarSrc = $user->avatar ? asset($user->avatar) : 'https://ui-avatars.com/api/?name='.urlencode($user->name).'&size=120&background=1565c0&color=fff&rounded=true'; @endphp
                <img id="avatar-preview" src="{{ $avatarSrc }}" alt="{{ $user->name }}" class="rounded-circle shadow-sm" style="width: 120px; height: 120px; object-fit: cover; border: 3px solid #eee;">
                <label for="avatar" class="position-absolute bg-primary text-white rounded-circle d-flex align-items-center justify-content-center shadow" style="cursor:pointer;width:34px;height:34px;bottom:4px;right:4px;">
                    <i class="fa-solid fa-camera" style="font-size:14px;"></i>
                </label>
                <input type="file" id="avatar" name="avatar" class="d-none" accept="image/*"
                       onchange="document.getElementById('avatar-preview').src = URL.createObjectURL(this.files[0])">
            </div>
            <p class="text-muted small mt-2">Click camera icon to change photo</p>
        </div>
    </div>

    <h5 class="mb-3 border-bottom pb-2">Basic Information</h5>
    <div class="row">
        <div class="col-md-6 mb-3 form-group">
            <label class="form-label text-muted small mb-1">First Name <span class="text-danger">*</span></label>
            {{ html()->text('first_name')->class('form-control')->required() }}
        </div>
        <div class="col-md-6 mb-3 form-group">
            <label class="form-label text-muted small mb-1">Last Name <span class="text-danger">*</span></label>
            {{ html()->text('last_name')->class('form-control')->required() }}
        </div>
        <div class="col-md-6 mb-3 form-group">
            <label class="form-label text-muted small mb-1">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" value="{{ $user->email }}" disabled>
            <small class="text-muted">Email cannot be changed.</small>
        </div>
        <div class="col-md-6 mb-3 form-group">
            <label class="form-label text-muted small mb-1">Mobile</label>
            {{ html()->text('mobile')->class('form-control') }}
        </div>
        <div class="col-md-6 mb-3 form-group">
            <label class="form-label text-muted small mb-1">Date of Birth</label>
            @php $value = $user->date_of_birth ? \Carbon\Carbon::parse($user->date_of_birth)->toDateString() : ''; @endphp
            {{ html()->date('date_of_birth', $value)->class('form-control') }}
        </div>
        <div class="col-md-6 mb-3 form-group">
            <label class="form-label text-muted small mb-1">Gender</label>
            {{ html()->select('gender', ['Female' => 'Female', 'Male' => 'Male', 'Other' => 'Other'])->placeholder('-- Select --')->class('form-control') }}
        </div>
        <div class="col-md-12 mb-3 form-group">
            <label class="form-label text-muted small mb-1">Address</label>
            {{ html()->text('address')->class('form-control') }}
        </div>
        <div class="col-md-12 mb-3 form-group">
            <label class="form-label text-muted small mb-1">Bio</label>
            {{ html()->textarea('bio')->class('form-control')->rows(4) }}
        </div>
    </div>

    <h5 class="mb-3 mt-4 border-bottom pb-2">Social Links</h5>
    <div class="row">
        <div class="col-md-6 mb-3 form-group">
            <label class="form-label text-muted small mb-1"><i class="fa-solid fa-globe mr-1"></i> Website URL</label>
            {{ html()->text('url_website')->class('form-control') }}
        </div>
        <div class="col-md-6 mb-3 form-group">
            <label class="form-label text-muted small mb-1"><i class="fa-brands fa-facebook mr-1"></i> Facebook URL</label>
            {{ html()->text('url_facebook')->class('form-control') }}
        </div>
        <div class="col-md-6 mb-3 form-group">
            <label class="form-label text-muted small mb-1"><i class="fa-brands fa-twitter mr-1"></i> Twitter URL</label>
            {{ html()->text('url_twitter')->class('form-control') }}
        </div>
        <div class="col-md-6 mb-3 form-group">
            <label class="form-label text-muted small mb-1"><i class="fa-brands fa-instagram mr-1"></i> Instagram URL</label>
            {{ html()->text('url_instagram')->class('form-control') }}
        </div>
        <div class="col-md-6 mb-3 form-group">
            <label class="form-label text-muted small mb-1"><i class="fa-brands fa-linkedin mr-1"></i> LinkedIn URL</label>
            {{ html()->text('url_linkedin')->class('form-control') }}
        </div>
    </div>

    <div class="mt-4 text-end">
        <button type="submit" class="btn-default">Save Changes</button>
    </div>

{{ html()->closeModelForm() }}
@endsection
