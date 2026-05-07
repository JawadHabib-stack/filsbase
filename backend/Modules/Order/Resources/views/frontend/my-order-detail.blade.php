@extends('filsbase.layouts.user')

@section('title', 'Order Details')

@section('user_content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">Order Details</h4>
    <a href="{{ route('frontend.orders.index') }}" class="btn btn-sm btn-outline-secondary">
        <i class="fa-solid fa-arrow-left me-1"></i> Back to Orders
    </a>
</div>

{{-- Status Bar --}}
<div class="row g-3 mb-4">
    <div class="col-sm-6 col-lg-3">
        <div class="p-3 rounded-3 bg-light text-center">
            <small class="text-muted d-block mb-1">Order Number</small>
            <strong>{{ $order->order_number }}</strong>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="p-3 rounded-3 bg-light text-center">
            <small class="text-muted d-block mb-1">Date</small>
            <strong>{{ $order->created_at->format('M d, Y') }}</strong>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="p-3 rounded-3 bg-light text-center">
            <small class="text-muted d-block mb-1">Order Status</small>
            @php
                $stBadge = match($order->status) {
                    'Completed'  => 'success',
                    'Processing' => 'primary',
                    'Pending'    => 'warning',
                    'Cancelled'  => 'danger',
                    default      => 'secondary',
                };
            @endphp
            <span class="badge bg-{{ $stBadge }} fs-6">{{ $order->status }}</span>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="p-3 rounded-3 bg-light text-center">
            <small class="text-muted d-block mb-1">Payment</small>
            @php
                $psBadge = match($order->payment_status) {
                    'Paid'    => 'success',
                    'Pending' => 'warning',
                    'Failed'  => 'danger',
                    default   => 'secondary',
                };
            @endphp
            <span class="badge bg-{{ $psBadge }} fs-6">{{ $order->payment_status }}</span>
        </div>
    </div>
</div>

<div class="row g-4">
    {{-- Order Items --}}
    <div class="col-lg-8">
        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white fw-semibold border-bottom py-3">
                <i class="fa-solid fa-box me-2 text-primary"></i> Items Ordered
            </div>
            <div class="card-body p-0">
                <table class="table mb-0 align-middle">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-3">Product</th>
                            <th class="text-center">Qty</th>
                            <th class="text-end">Price</th>
                            <th class="text-end pe-3">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($order->items as $item)
                        <tr>
                            <td class="ps-3">{{ $item->product_name }}</td>
                            <td class="text-center">{{ $item->quantity }}</td>
                            <td class="text-end">${{ number_format($item->price, 2) }}</td>
                            <td class="text-end pe-3 fw-semibold">${{ number_format($item->total, 2) }}</td>
                        </tr>
                        @empty
                        <tr><td colspan="4" class="text-center text-muted py-3">No items found.</td></tr>
                        @endforelse
                    </tbody>
                    <tfoot class="table-light">
                        <tr>
                            <td colspan="3" class="text-end fw-bold ps-3">Total</td>
                            <td class="text-end fw-bold text-primary pe-3 fs-5">${{ number_format($order->total_amount, 2) }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        @if($order->notes)
        <div class="card border-0 shadow-sm rounded-3 mt-4">
            <div class="card-header bg-white fw-semibold border-bottom py-3">
                <i class="fa-solid fa-note-sticky me-2 text-primary"></i> Order Notes
            </div>
            <div class="card-body text-muted">{{ $order->notes }}</div>
        </div>
        @endif
    </div>

    {{-- Billing Details --}}
    <div class="col-lg-4">
        <div class="card border-0 shadow-sm rounded-3 mb-4">
            <div class="card-header bg-white fw-semibold border-bottom py-3">
                <i class="fa-solid fa-location-dot me-2 text-primary"></i> Billing Details
            </div>
            <div class="card-body small">
                @php $bd = is_array($order->billing_details) ? $order->billing_details : json_decode($order->billing_details, true); @endphp
                @if($bd)
                    <p class="mb-1"><strong>{{ ($bd['first_name'] ?? '') . ' ' . ($bd['last_name'] ?? '') }}</strong></p>
                    <p class="mb-1">{{ $bd['email'] ?? '' }}</p>
                    <p class="mb-1">{{ $bd['phone'] ?? '' }}</p>
                    <p class="mb-1">{{ $bd['address'] ?? '' }}</p>
                    <p class="mb-0">{{ implode(', ', array_filter([$bd['city'] ?? '', $bd['state'] ?? '', $bd['country'] ?? ''])) }}</p>
                @else
                    <span class="text-muted">—</span>
                @endif
            </div>
        </div>

        <div class="card border-0 shadow-sm rounded-3">
            <div class="card-header bg-white fw-semibold border-bottom py-3">
                <i class="fa-solid fa-credit-card me-2 text-primary"></i> Payment Method
            </div>
            <div class="card-body small">
                <strong>{{ $order->payment_method }}</strong>
                @if($order->payment_id)
                    <p class="mb-0 text-muted mt-1">Txn: {{ $order->payment_id }}</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
