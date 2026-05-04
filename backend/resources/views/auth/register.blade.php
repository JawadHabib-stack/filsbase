@extends('filsbase.layouts.app')

@section('title', 'Register')

@section('content')
<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Register</h1>
                    <nav class="wow fadeInUp">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Register</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Register Form Start -->
<div class="contact-us" style="padding-top: 50px; padding-bottom: 100px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="contact-form wow fadeInUp">
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Create an Account</h2>
                        <p>Sign up to access all the features and dashboard.</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12 mb-4">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Full Name *" required value="{{ old('name') }}" autofocus autocomplete="name">
                                <x-input-error class="text-danger mt-2" :messages="$errors->get('name')" />
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email Address *" required value="{{ old('email') }}" autocomplete="username">
                                <x-input-error class="text-danger mt-2" :messages="$errors->get('email')" />
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password *" required autocomplete="new-password">
                                <x-input-error class="text-danger mt-2" :messages="$errors->get('password')" />
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password *" required autocomplete="new-password">
                                <x-input-error class="text-danger mt-2" :messages="$errors->get('password_confirmation')" />
                            </div>

                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn-default" style="width: 100%;">Register</button>
                            </div>
                            
                            <div class="col-md-12 text-center mt-4">
                                <p style="color: #666;">Already registered? <a href="{{ route('login') }}" style="color: var(--primary-color); font-weight: bold;">Log in</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Form End -->
@endsection
