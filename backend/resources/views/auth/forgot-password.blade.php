@extends('filsbase.layouts.app')

@section('title', 'Forgot Password')

@section('content')
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Forgot Password</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Forgot Password</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Forgot Password Form Start -->
<div class="contact-us" style="padding-top: 50px; padding-bottom: 100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="contact-form wow fadeInUp">
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Reset Password</h2>
                        <p>Forgot your password? No problem. Just let us know your email address and we will email you a password reset link.</p>
                    </div>

                    <x-auth-session-status class="mb-4 text-success" :status="session('status')" />

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email Address *" required value="{{ old('email') }}" autofocus>
                                <x-input-error class="text-danger mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn-default" style="width: 100%;">Email Password Reset Link</button>
                            </div>
                            
                            <div class="col-md-12 text-center mt-4">
                                <p style="color: #666;">Remembered your password? <a href="{{ route('login') }}" style="color: var(--primary-color); font-weight: bold;">Log in</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Forgot Password Form End -->
@endsection
