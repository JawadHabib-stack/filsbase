@extends('filsbase.layouts.user')

@section('title', 'Dashboard')

@section('user_content')
<div class="row align-items-center mb-4 pb-4 border-bottom">
    <div class="col-auto">
        <img src="{{ asset($$module_name_singular->avatar) }}" alt="{{ $$module_name_singular->name }}" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover; border: 3px solid var(--primary-color);">
    </div>
    <div class="col">
        <h3 class="mb-1">{{ $$module_name_singular->name }}</h3>
        <p class="text-muted mb-0"><i class="fa-regular fa-envelope mr-2"></i> {{ $$module_name_singular->email }}</p>
        @if ($$module_name_singular->mobile)
            <p class="text-muted mb-0"><i class="fa-solid fa-phone mr-2"></i> {{ $$module_name_singular->mobile }}</p>
        @endif
    </div>
</div>

<h4 class="mb-3">Personal Information</h4>
<div class="row mb-4">
    <div class="col-md-6 mb-3">
        <div class="p-3 bg-light rounded">
            <small class="text-muted d-block mb-1">First Name</small>
            <strong>{{ $$module_name_singular->first_name ?? 'Not set' }}</strong>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="p-3 bg-light rounded">
            <small class="text-muted d-block mb-1">Last Name</small>
            <strong>{{ $$module_name_singular->last_name ?? 'Not set' }}</strong>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="p-3 bg-light rounded">
            <small class="text-muted d-block mb-1">Date of Birth</small>
            <strong>{{ $$module_name_singular->date_of_birth ? optional($$module_name_singular->date_of_birth)->toFormattedDateString() : 'Not set' }}</strong>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="p-3 bg-light rounded">
            <small class="text-muted d-block mb-1">Gender</small>
            <strong>{{ $$module_name_singular->gender ?? 'Not set' }}</strong>
        </div>
    </div>
    <div class="col-md-12 mb-3">
        <div class="p-3 bg-light rounded">
            <small class="text-muted d-block mb-1">Address</small>
            <strong>{{ $$module_name_singular->address ?? 'Not set' }}</strong>
        </div>
    </div>
</div>

<h4 class="mb-3">Bio</h4>
<div class="p-3 bg-light rounded mb-4">
    <p class="mb-0">{{ $$module_name_singular->bio ?? 'No bio provided.' }}</p>
</div>

@if ($$module_name_singular->url_website || $$module_name_singular->url_facebook || $$module_name_singular->url_twitter || $$module_name_singular->url_instagram || $$module_name_singular->url_linkedin)
    <h4 class="mb-3">Social Links</h4>
    <div class="d-flex gap-3">
        @if ($$module_name_singular->url_website)
            <a href="{{ $$module_name_singular->url_website }}" target="_blank" class="btn btn-light"><i class="fa-solid fa-globe"></i> Website</a>
        @endif
        @if ($$module_name_singular->url_facebook)
            <a href="{{ $$module_name_singular->url_facebook }}" target="_blank" class="btn btn-light"><i class="fa-brands fa-facebook-f"></i> Facebook</a>
        @endif
        @if ($$module_name_singular->url_twitter)
            <a href="{{ $$module_name_singular->url_twitter }}" target="_blank" class="btn btn-light"><i class="fa-brands fa-twitter"></i> Twitter</a>
        @endif
        @if ($$module_name_singular->url_instagram)
            <a href="{{ $$module_name_singular->url_instagram }}" target="_blank" class="btn btn-light"><i class="fa-brands fa-instagram"></i> Instagram</a>
        @endif
        @if ($$module_name_singular->url_linkedin)
            <a href="{{ $$module_name_singular->url_linkedin }}" target="_blank" class="btn btn-light"><i class="fa-brands fa-linkedin-in"></i> LinkedIn</a>
        @endif
    </div>
@endif
@endsection
