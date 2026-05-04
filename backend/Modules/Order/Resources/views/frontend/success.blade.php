@extends('filsbase.layouts.app')

@section('title', 'Order Success')

@section('content')
    <div class="page-success py-5 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="success-icon mb-4">
                        <i class="fa-solid fa-circle-check fa-6x text-success"></i>
                    </div>
                    <h1 class="display-4 fw-bold mb-3">Thank You!</h1>
                    <p class="lead text-muted mb-5">Your order has been placed successfully. We'll send you a confirmation email with details shortly.</p>
                    
                    <div class="card border-0 shadow-sm rounded-4 mb-5">
                        <div class="card-body p-4 p-md-5 text-start">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <h6 class="text-muted text-uppercase small fw-bold mb-2">Order Number</h6>
                                    <p class="h5 fw-bold text-primary">{{ $order->order_number }}</p>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <h6 class="text-muted text-uppercase small fw-bold mb-2">Order Date</h6>
                                    <p class="h5 fw-bold">{{ $order->created_at->format('M d, Y') }}</p>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="text-muted text-uppercase small fw-bold mb-2">Total Amount</h6>
                                    <p class="h5 fw-bold">${{ number_format($order->total_amount, 2) }}</p>
                                </div>
                                <div class="col-md-6 text-md-end">
                                    <h6 class="text-muted text-uppercase small fw-bold mb-2">Payment Method</h6>
                                    <p class="h5 fw-bold">{{ $order->payment_method }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ route('frontend.products.index') }}" class="btn btn-outline-primary px-4 py-3 rounded-3 fw-bold">Continue Shopping</a>
                        <a href="{{ route('frontend.users.profile') }}" class="btn btn-primary px-4 py-3 rounded-3 fw-bold">View My Orders</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
