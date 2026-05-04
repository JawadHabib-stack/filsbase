@extends('filsbase.layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">@yield('title')</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('title')</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<div class="user-dashboard" style="padding-top: 50px; padding-bottom: 100px;">
    <div class="container">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-lg-3 col-md-4 mb-4">
                <div class="card shadow-sm border-0" style="border-radius: 15px; overflow: hidden;">
                    <div class="card-body p-0">
                        <div class="list-group list-group-flush user-sidebar">
                            <a href="{{ route('frontend.users.profile') }}" class="list-group-item list-group-item-action {{ request()->routeIs('frontend.users.profile') ? 'active' : '' }}" style="padding: 15px 20px; font-weight: 500;">
                                <i class="fa-regular fa-user mr-2" style="width: 20px;"></i> Dashboard
                            </a>
                            <a href="{{ route('frontend.users.profileEdit') }}" class="list-group-item list-group-item-action {{ request()->routeIs('frontend.users.profileEdit') ? 'active' : '' }}" style="padding: 15px 20px; font-weight: 500;">
                                <i class="fa-regular fa-pen-to-square mr-2" style="width: 20px;"></i> Edit Profile
                            </a>
                            <a href="{{ route('frontend.users.changePassword') }}" class="list-group-item list-group-item-action {{ request()->routeIs('frontend.users.changePassword') ? 'active' : '' }}" style="padding: 15px 20px; font-weight: 500;">
                                <i class="fa-solid fa-lock mr-2" style="width: 20px;"></i> Change Password
                            </a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="list-group-item list-group-item-action text-danger" style="padding: 15px 20px; font-weight: 500;">
                                <i class="fa-solid fa-right-from-bracket mr-2" style="width: 20px;"></i> Logout
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-lg-9 col-md-8">
                <div class="card shadow-sm border-0" style="border-radius: 15px;">
                    <div class="card-body" style="padding: 30px;">
                        @include('flash::message')
                        @yield('user_content')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .user-sidebar .list-group-item {
        border-color: #f1f1f1;
        color: #333;
        transition: all 0.3s ease;
    }
    .user-sidebar .list-group-item:hover {
        background-color: #f8f9fa;
        color: var(--primary-color);
    }
    .user-sidebar .list-group-item.active {
        background-color: var(--primary-color);
        color: white;
        border-color: var(--primary-color);
    }
    .user-sidebar .list-group-item.active i {
        color: white !important;
    }
</style>
@endsection
