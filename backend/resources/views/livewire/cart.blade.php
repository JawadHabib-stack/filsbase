<div class="cart-container">
    @if(count($cart) > 0)
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="bg-light">
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cart as $id => $item)
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ Str::startsWith($item['image'], 'http') ? $item['image'] : asset('storage/'.$item['image']) }}" alt="{{ $item['name'] }}" class="rounded me-3" style="width: 60px; height: 60px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0">{{ $item['name'] }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>${{ number_format($item['price'], 2) }}</td>
                            <td>
                                <div class="input-group input-group-sm" style="width: 120px;">
                                    <button class="btn btn-outline-secondary" type="button" wire:click="updateQuantity({{ $id }}, {{ $item['quantity'] - 1 }})">-</button>
                                    <input type="text" class="form-control text-center" value="{{ $item['quantity'] }}" readonly>
                                    <button class="btn btn-outline-secondary" type="button" wire:click="updateQuantity({{ $id }}, {{ $item['quantity'] + 1 }})">+</button>
                                </div>
                            </td>
                            <td>${{ number_format($item['price'] * $item['quantity'], 2) }}</td>
                            <td>
                                <button class="btn btn-link text-danger p-0" wire:click="remove({{ $id }})">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot class="bg-light">
                    <tr>
                        <td colspan="3" class="text-end fw-bold">Total:</td>
                        <td colspan="2" class="fw-bold text-primary" style="font-size: 1.2rem;">${{ number_format($total, 2) }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="d-flex justify-content-between mt-4">
            <button class="btn btn-outline-danger" wire:click="clear">Clear Cart</button>
            <a href="{{ route('frontend.checkout.index') }}" class="btn btn-primary px-5">Proceed to Checkout</a>
        </div>
    @else
        <div class="text-center py-5">
            <div class="mb-4">
                <i class="fa-solid fa-cart-shopping fa-4x text-muted opacity-25"></i>
            </div>
            <h4>Your cart is empty</h4>
            <p class="text-muted">Browse our products and add something to your cart!</p>
            <a href="{{ route('frontend.products.index') }}" class="btn btn-primary mt-3">Go to Shop</a>
        </div>
    @endif
</div>
