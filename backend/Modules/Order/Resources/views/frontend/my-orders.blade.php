@extends('filsbase.layouts.user')

@section('title', 'My Orders')

@section('user_content')
<h4 class="mb-4 fw-bold">My Orders</h4>

@if($orders->isEmpty())
    <div class="text-center py-5">
        <i class="fa-solid fa-box-open fa-4x text-muted mb-3"></i>
        <h5 class="text-muted">No orders yet</h5>
        <a href="{{ route('frontend.products.index') }}" class="btn btn-primary mt-3">Browse Products</a>
    </div>
@else
    <div class="table-responsive">
        <table class="table table-hover align-middle">
            <thead class="table-light">
                <tr>
                    <th>Order #</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Payment</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td><span class="fw-semibold">{{ $order->order_number }}</span></td>
                    <td>{{ $order->created_at->format('M d, Y') }}</td>
                    <td class="fw-bold">${{ number_format($order->total_amount, 2) }}</td>
                    <td>
                        @php
                            $ps = $order->payment_status;
                            $psBadge = match($ps) {
                                'Paid'    => 'success',
                                'Pending' => 'warning',
                                'Failed'  => 'danger',
                                default   => 'secondary',
                            };
                        @endphp
                        <span class="badge bg-{{ $psBadge }}">{{ $ps }}</span>
                    </td>
                    <td>
                        @php
                            $st = $order->status;
                            $stBadge = match($st) {
                                'Completed'  => 'success',
                                'Processing' => 'primary',
                                'Pending'    => 'warning',
                                'Cancelled'  => 'danger',
                                default      => 'secondary',
                            };
                        @endphp
                        <span class="badge bg-{{ $stBadge }}">{{ $st }}</span>
                    </td>
                    <td>
                        <a href="{{ route('frontend.orders.show', $order->order_number) }}" class="btn btn-sm btn-outline-primary">
                            <i class="fa-solid fa-eye me-1"></i> View
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-3">
        {{ $orders->links() }}
    </div>
@endif
@endsection
