@extends('filsbase.layouts.app')

@section('title', 'Login')

@section('content')
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Login</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Login Form Start -->
<div class="contact-us" style="padding-top: 50px; padding-bottom: 100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="contact-form wow fadeInUp">
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Welcome Back</h2>
                        <p>Log in to access your account dashboard.</p>
                    </div>

                    <x-auth-session-status class="mb-4 text-success" :status="session('status')" />

                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email Address *" required value="{{ old('email') }}" autofocus autocomplete="username">
                                <x-input-error class="text-danger mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password *" required autocomplete="current-password">
                                <x-input-error class="text-danger mt-2" :messages="$errors->get('password')" />
                            </div>

                            <div class="form-group col-md-12 mb-4 d-flex justify-content-between align-items-center">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="remember_me" name="remember">
                                    <label class="custom-control-label" for="remember_me" style="color: #666;">Remember me</label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" style="color: var(--primary-color);">Forgot your password?</a>
                                @endif
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn-default" style="width: 100%;">Log in</button>
                            </div>
                            
                            <div class="col-md-12 text-center mt-4">
                                <p style="color: #666;">Don't have an account? <a href="{{ route('register') }}" style="color: var(--primary-color); font-weight: bold;">Register</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Form End -->
@endsection
