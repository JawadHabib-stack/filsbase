@extends('filsbase.layouts.user')

@section('title', 'Dashboard')

@section('user_content')

{{-- Welcome Banner --}}
<div class="d-flex align-items-center gap-3 mb-4 p-4 rounded-4" style="background: linear-gradient(135deg, #1565c0 0%, #42a5f5 100%);">
    @php $avatarSrc = $$module_name_singular->avatar ? asset($$module_name_singular->avatar) : 'https://ui-avatars.com/api/?name='.urlencode($$module_name_singular->name).'&size=72&background=ffffff&color=1565c0&rounded=true'; @endphp
    <img src="{{ $avatarSrc }}" alt="{{ $$module_name_singular->name }}"
         class="rounded-circle border border-3 border-white shadow"
         style="width: 72px; height: 72px; object-fit: cover; flex-shrink: 0;">
    <div>
        <h4 class="mb-0 fw-bold text-white">Welcome back, {{ $$module_name_singular->first_name ?? $$module_name_singular->name }}! 👋</h4>
        <p class="mb-0 text-white opacity-75 small">{{ $$module_name_singular->email }}</p>
    </div>
    <div class="ms-auto text-end d-none d-md-block">
        <p class="mb-0 text-white opacity-75 small">Member since</p>
        <p class="mb-0 text-white fw-semibold">{{ $$module_name_singular->created_at->format('M Y') }}</p>
    </div>
</div>

{{-- Stats Cards --}}
<div class="row g-3 mb-4">
    <div class="col-6 col-lg-3">
        <div class="card border-0 shadow-sm rounded-4 h-100" style="border-left: 4px solid #1565c0 !important;">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-muted small fw-semibold text-uppercase" style="font-size:11px;">Total Orders</span>
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width:38px;height:38px;background:#e3f2fd;">
                        <i class="fa-solid fa-bag-shopping text-primary"></i>
                    </div>
                </div>
                <h2 class="fw-bold mb-0" style="color:#1565c0;">{{ $stats['total_orders'] }}</h2>
                <p class="text-muted mb-0" style="font-size:12px;">All time orders</p>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card border-0 shadow-sm rounded-4 h-100" style="border-left: 4px solid #2e7d32 !important;">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-muted small fw-semibold text-uppercase" style="font-size:11px;">Total Spent</span>
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width:38px;height:38px;background:#e8f5e9;">
                        <i class="fa-solid fa-dollar-sign text-success"></i>
                    </div>
                </div>
                <h2 class="fw-bold mb-0 text-success">${{ number_format($stats['total_spent'], 2) }}</h2>
                <p class="text-muted mb-0" style="font-size:12px;">Lifetime value</p>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card border-0 shadow-sm rounded-4 h-100" style="border-left: 4px solid #f57c00 !important;">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-muted small fw-semibold text-uppercase" style="font-size:11px;">Pending</span>
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width:38px;height:38px;background:#fff3e0;">
                        <i class="fa-solid fa-clock text-warning"></i>
                    </div>
                </div>
                <h2 class="fw-bold mb-0 text-warning">{{ $stats['pending_orders'] }}</h2>
                <p class="text-muted mb-0" style="font-size:12px;">Awaiting processing</p>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card border-0 shadow-sm rounded-4 h-100" style="border-left: 4px solid #6a1b9a !important;">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-muted small fw-semibold text-uppercase" style="font-size:11px;">Completed</span>
                    <div class="rounded-circle d-flex align-items-center justify-content-center" style="width:38px;height:38px;background:#f3e5f5;">
                        <i class="fa-solid fa-circle-check" style="color:#6a1b9a;"></i>
                    </div>
                </div>
                <h2 class="fw-bold mb-0" style="color:#6a1b9a;">{{ $stats['completed_orders'] }}</h2>
                <p class="text-muted mb-0" style="font-size:12px;">Delivered orders</p>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    {{-- Recent Orders --}}
    <div class="col-lg-7">
        <div class="card border-0 shadow-sm rounded-4 h-100">
            <div class="card-header bg-white border-0 pt-4 px-4 pb-0 d-flex align-items-center justify-content-between">
                <h6 class="fw-bold mb-0"><i class="fa-solid fa-clock-rotate-left me-2 text-primary"></i>Recent Orders</h6>
                <a href="{{ route('frontend.orders.index') }}" class="btn btn-sm btn-outline-primary rounded-pill">View All</a>
            </div>
            <div class="card-body px-4 pt-3">
                @if($recent_orders->isEmpty())
                    <div class="text-center py-4">
                        <i class="fa-solid fa-box-open fa-3x text-muted mb-3"></i>
                        <p class="text-muted mb-2">No orders yet</p>
                        <a href="{{ route('frontend.products.index') }}" class="btn btn-primary btn-sm rounded-pill">Shop Now</a>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0" style="font-size:13.5px;">
                            <thead>
                                <tr style="border-bottom:2px solid #f0f0f0;">
                                    <th class="fw-semibold text-muted ps-0" style="font-size:11px;">ORDER</th>
                                    <th class="fw-semibold text-muted" style="font-size:11px;">DATE</th>
                                    <th class="fw-semibold text-muted" style="font-size:11px;">TOTAL</th>
                                    <th class="fw-semibold text-muted" style="font-size:11px;">STATUS</th>
                                    <th class="fw-semibold text-muted pe-0" style="font-size:11px;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recent_orders as $order)
                                <tr style="border-bottom:1px solid #f8f8f8;">
                                    <td class="ps-0 fw-semibold">{{ $order->order_number }}</td>
                                    <td class="text-muted">{{ $order->created_at->format('M d, Y') }}</td>
                                    <td class="fw-bold">${{ number_format($order->total_amount, 2) }}</td>
                                    <td>
                                        @php
                                            $badge = match($order->status) {
                                                'Completed'  => ['bg'=>'#e8f5e9','color'=>'#2e7d32'],
                                                'Processing' => ['bg'=>'#e3f2fd','color'=>'#1565c0'],
                                                'Pending'    => ['bg'=>'#fff8e1','color'=>'#f57c00'],
                                                'Cancelled'  => ['bg'=>'#fce4ec','color'=>'#c62828'],
                                                default      => ['bg'=>'#f5f5f5','color'=>'#555'],
                                            };
                                        @endphp
                                        <span class="px-2 py-1 rounded-pill fw-semibold" style="font-size:11px;background:{{ $badge['bg'] }};color:{{ $badge['color'] }};">
                                            {{ $order->status }}
                                        </span>
                                    </td>
                                    <td class="pe-0">
                                        <a href="{{ route('frontend.orders.show', $order->order_number) }}" class="btn btn-sm btn-light rounded-pill" style="font-size:11px;">
                                            <i class="fa-solid fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>

    {{-- Right Column --}}
    <div class="col-lg-5 d-flex flex-column gap-4">
        {{-- Profile Info --}}
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-header bg-white border-0 pt-4 px-4 pb-0 d-flex align-items-center justify-content-between">
                <h6 class="fw-bold mb-0"><i class="fa-solid fa-user me-2 text-primary"></i>Profile Info</h6>
                <a href="{{ route('frontend.users.profileEdit') }}" class="btn btn-sm btn-outline-secondary rounded-pill">Edit</a>
            </div>
            <div class="card-body px-4 pt-3 pb-3">
                <div class="d-flex flex-column gap-2" style="font-size:13.5px;">
                    <div class="d-flex justify-content-between py-2 border-bottom">
                        <span class="text-muted">Full Name</span>
                        <span class="fw-semibold">{{ $$module_name_singular->name }}</span>
                    </div>
                    <div class="d-flex justify-content-between py-2 border-bottom">
                        <span class="text-muted">Email</span>
                        <span class="fw-semibold">{{ Str::limit($$module_name_singular->email, 24) }}</span>
                    </div>
                    <div class="d-flex justify-content-between py-2 border-bottom">
                        <span class="text-muted">Username</span>
                        <span class="fw-semibold">{{ $$module_name_singular->username }}</span>
                    </div>
                    <div class="d-flex justify-content-between py-2">
                        <span class="text-muted">Phone</span>
                        <span class="fw-semibold">{{ $$module_name_singular->mobile ?? '—' }}</span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Quick Links --}}
        <div class="card border-0 shadow-sm rounded-4">
            <div class="card-header bg-white border-0 pt-4 px-4 pb-0">
                <h6 class="fw-bold mb-0"><i class="fa-solid fa-bolt me-2 text-primary"></i>Quick Links</h6>
            </div>
            <div class="card-body px-4 pt-3 pb-3">
                <div class="d-flex flex-column gap-2">
                    <a href="{{ route('frontend.products.index') }}" class="btn btn-light rounded-3 text-start d-flex align-items-center gap-2" style="font-size:13.5px;">
                        <i class="fa-solid fa-store text-primary" style="width:18px;"></i> Browse Products
                    </a>
                    <a href="{{ route('frontend.orders.index') }}" class="btn btn-light rounded-3 text-start d-flex align-items-center gap-2" style="font-size:13.5px;">
                        <i class="fa-solid fa-bag-shopping text-success" style="width:18px;"></i> My Orders
                    </a>
                    <a href="{{ route('filsbase.xdairy') }}" class="btn btn-light rounded-3 text-start d-flex align-items-center gap-2" style="font-size:13.5px;">
                        <i class="fa-solid fa-cow text-warning" style="width:18px;"></i> X Dairy
                    </a>
                    <a href="{{ route('filsbase.contact') }}" class="btn btn-light rounded-3 text-start d-flex align-items-center gap-2" style="font-size:13.5px;">
                        <i class="fa-solid fa-headset text-danger" style="width:18px;"></i> Contact Support
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
