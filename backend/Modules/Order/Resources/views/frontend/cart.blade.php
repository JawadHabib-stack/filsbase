@extends('filsbase.layouts.app')

@section('title', 'Shopping Cart')

@section('content')
<!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Shopping <span>Cart</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('frontend.products.index') }}">shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">cart</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <div class="page-cart py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                        <div class="card-body p-4 p-md-5">
                            @include('frontend.includes.messages')
                            <livewire:cart />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
