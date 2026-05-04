<a href="{{ route('frontend.cart.index') }}" class="text-primary me-4 position-relative">
    <i class="fa-solid fa-cart-shopping"></i> Cart
    @if($count > 0)
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" style="font-size: 0.6rem;">
            {{ $count }}
        </span>
    @endif
</a>
