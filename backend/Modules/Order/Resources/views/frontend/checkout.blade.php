@extends('filsbase.layouts.app')

@push('after-styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/css/intlTelInput.css">
<style>
    .iti { width: 100%; }
    .iti__country-list { z-index: 100; }
</style>
@endpush

@section('title', 'Checkout')

@section('content')
<!-- Page Header Section Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Check<span>out</span></h1>
                        <nav class="wow fadeInUp">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('frontend.index') }}">home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('frontend.cart.index') }}">cart</a></li>
                                <li class="breadcrumb-item active" aria-current="page">checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <div class="page-checkout py-5">
        <div class="container">
            <form action="{{ route('frontend.checkout.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card border-0 shadow-sm rounded-4 mb-4">
                            <div class="card-body p-4">
                                <h4 class="mb-4">Billing Details</h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">First Name</label>
                                        <input type="text" name="first_name" class="form-control" value="{{ auth()->user()->first_name ?? '' }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" value="{{ auth()->user()->last_name ?? '' }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ auth()->user()->email ?? '' }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Phone</label>
                                        <input type="tel" name="phone" id="phone" class="form-control" value="{{ auth()->user()->mobile ?? '' }}" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">Country</label>
                                        <select name="country" id="country-select" class="form-select" required>
                                            <option value="">Select Country</option>
                                            @foreach($countries as $code => $name)
                                                <option value="{{ $name }}" data-code="{{ $code }}">{{ $name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">State / Province</label>
                                        <select name="state" id="state-select" class="form-select" required disabled>
                                            <option value="">Select State</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label">City</label>
                                        <select name="city" id="city-select" class="form-select" required disabled>
                                            <option value="">Select City</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Address</label>
                                        <textarea name="address" class="form-control" rows="3" required placeholder="Street address, apartment, suite, etc.">{{ auth()->user()->address ?? '' }}</textarea>
                                    </div>
                                    <div class="col-12 mt-4">
                                        <label class="form-label">Order Notes (Optional)</label>
                                        <textarea name="notes" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card border-0 shadow-sm rounded-4">
                            <div class="card-body p-4">
                                <h4 class="mb-4">Payment Method</h4>
                                @foreach($payment_methods as $method)
                                    <div class="form-check mb-3 p-3 border rounded-3">
                                        <input class="form-check-input ms-0 me-3" type="radio" name="payment_method" id="method_{{ $method->id }}" value="{{ $method->name }}" {{ $loop->first ? 'checked' : '' }}>
                                        <label class="form-check-label fw-semibold" for="method_{{ $method->id }}">
                                            {{ $method->name }}
                                        </label>
                                        @if($method->description)
                                            <p class="text-muted small mb-0 ms-4 ps-2">{{ $method->description }}</p>
                                        @endif
                                        
                                        @if($method->slug == 'stripe')
                                            <div id="stripe-card-element" class="mt-3 p-3 border rounded bg-light d-none">
                                                <!-- A Stripe Element will be inserted here. -->
                                            </div>
                                            <div id="card-errors" role="alert" class="text-danger small mt-2"></div>
                                        @elseif($method->slug == 'paypal')
                                            <div id="paypal-button-container" class="mt-3 d-none"></div>
                                        @elseif($method->slug == 'bank-transfer')
                                            @php $bs = $method->settings ?? []; @endphp
                                            <div class="mt-3 p-3 border rounded bg-light small ms-4 ps-2">
                                                <strong>Bank Details:</strong><br>
                                                Bank: {{ $bs['bank_name'] ?? '' }}<br>
                                                Account Name: {{ $bs['account_name'] ?? '' }}<br>
                                                Account No: {{ $bs['account_number'] ?? '' }}<br>
                                                IBAN: {{ $bs['iban'] ?? '' }}<br>
                                                <span class="text-muted">{{ $bs['instructions'] ?? '' }}</span>
                                            </div>
                                        @elseif($method->slug == 'cod')
                                            @php $cs = $method->settings ?? []; @endphp
                                            <div class="mt-2 ms-4 ps-2 small text-muted">
                                                <i class="fa-solid fa-circle-info me-1"></i> {{ $cs['instructions'] ?? 'Pay cash upon delivery.' }}
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-5">
                        <div class="card border-0 shadow-sm rounded-4 sticky-top" style="top: 100px; z-index: 10;">
                            <div class="card-body p-4">
                                <h4 class="mb-4">Order Summary</h4>
                                <div class="order-items mb-4">
                                    @foreach($cart as $item)
                                        <div class="d-flex justify-content-between mb-3 pb-3 border-bottom">
                                            <div class="d-flex">
                                                <div class="bg-light rounded p-1 me-3" style="width: 50px; height: 50px;">
                                                    <img src="{{ Str::startsWith($item['image'], 'http') ? $item['image'] : asset('storage/'.$item['image']) }}" alt="" class="w-100 h-100 object-fit-cover rounded">
                                                </div>
                                                <div>
                                                    <p class="mb-0 fw-semibold">{{ $item['name'] }}</p>
                                                    <small class="text-muted">Qty: {{ $item['quantity'] }}</small>
                                                </div>
                                            </div>
                                            <span class="fw-semibold">${{ number_format($item['price'] * $item['quantity'], 2) }}</span>
                                        </div>
                                    @endforeach
                                </div>

                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-muted">Subtotal</span>
                                    <span class="fw-semibold">${{ number_format($total, 2) }}</span>
                                </div>
                                <div class="d-flex justify-content-between mb-4 pb-4 border-bottom">
                                    <span class="text-muted">Shipping</span>
                                    <span class="text-success fw-semibold">Free</span>
                                </div>
                                <div class="d-flex justify-content-between mb-4">
                                    <h5 class="fw-bold">Total</h5>
                                    <h5 class="fw-bold text-primary">${{ number_format($total, 2) }}</h5>
                                </div>

                                <button type="submit" id="submit-button" class="btn btn-primary w-100 py-3 rounded-3 fw-bold">PLACE ORDER</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('after-scripts')
<script src="https://js.stripe.com/v3/"></script>
@php
    $paypalMethod = $payment_methods->where('slug', 'paypal')->first();
    $paypalSettings = $paypalMethod->settings ?? [];
    if (empty($paypalSettings) && $paypalMethod && $paypalMethod->config) {
        $paypalSettings = json_decode($paypalMethod->config, true);
    }
    $paypalClientId = $paypalSettings['client_id'] ?? '';
@endphp
@if($paypalClientId)
<script src="https://www.paypal.com/sdk/js?client-id={{ $paypalClientId }}&currency=USD"></script>
@endif
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/js/intlTelInput.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const stripeMethod = document.querySelector('input[name="payment_method"][value="Stripe"]');
        const paypalMethod = document.querySelector('input[name="payment_method"][value="PayPal"]');
        const stripeElement = document.getElementById('stripe-card-element');
        const paypalElement = document.getElementById('paypal-button-container');
        const form = document.querySelector('form');
        const submitButton = document.getElementById('submit-button');
        const phoneInput = document.querySelector("#phone");
        const countrySelect = document.getElementById('country-select');
        
        const iti = window.intlTelInput(phoneInput, {
            utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@23.0.10/build/js/utils.js",
            initialCountry: "pk",
        });
        
        // Update iti when country select changes
        countrySelect.addEventListener('change', function() {
            const countryCode = this.options[this.selectedIndex].getAttribute('data-code');
            if (countryCode) {
                iti.setCountry(countryCode.toLowerCase());
            }
        });
        
        let stripe, elements, card;
        
        @php
            $stripeMethod = $payment_methods->where('slug', 'stripe')->first();
            $settings = $stripeMethod->settings ?? [];
            if (empty($settings) && $stripeMethod && $stripeMethod->config) {
                $settings = json_decode($stripeMethod->config, true);
            }
            $publicKey = $settings['public_key'] ?? '';
        @endphp

        const stripePublicKey = "{{ $publicKey }}";
        
        if (stripePublicKey && !stripePublicKey.includes('@')) {
            stripe = Stripe(stripePublicKey);
            elements = stripe.elements();
            card = elements.create('card', {
                style: {
                    base: {
                        fontSize: '16px',
                        color: '#32325d',
                    }
                }
            });
            card.mount('#stripe-card-element');
        } else {
            console.warn("Stripe Public Key is missing or invalid. Please check your Payment Method settings in Admin.");
        }

        document.querySelectorAll('input[name="payment_method"]').forEach(input => {
            input.addEventListener('change', function() {
                if (this.value === 'Stripe') {
                    if (stripeElement) stripeElement.classList.remove('d-none');
                    if (paypalElement) paypalElement.classList.add('d-none');
                    submitButton.classList.remove('d-none');
                } else if (this.value === 'PayPal') {
                    if (stripeElement) stripeElement.classList.add('d-none');
                    if (paypalElement) paypalElement.classList.remove('d-none');
                    submitButton.classList.add('d-none'); // Hide default submit button for PayPal
                } else {
                    if (stripeElement) stripeElement.classList.add('d-none');
                    if (paypalElement) paypalElement.classList.add('d-none');
                    submitButton.classList.remove('d-none');
                }
            });
        });

        // Initialize visibility
        const selectedMethod = document.querySelector('input[name="payment_method"]:checked');
        if (selectedMethod) {
            if (selectedMethod.value === 'Stripe') {
                if (stripeElement) stripeElement.classList.remove('d-none');
            } else if (selectedMethod.value === 'PayPal') {
                if (paypalElement) paypalElement.classList.remove('d-none');
                submitButton.classList.add('d-none');
            }
        }

        // Initialize PayPal
        if (typeof paypal !== 'undefined' && paypalElement) {
            paypal.Buttons({
                createOrder: async function(data, actions) {
                    try {
                        const response = await fetch("{{ route('frontend.payment.paypal.create-order') }}", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            }
                        });
                        const orderData = await response.json();
                        
                        if (orderData.error) {
                            alert(orderData.error);
                            return;
                        }
                        return orderData.id;
                    } catch (error) {
                        console.error("PayPal create order error:", error);
                        alert("Could not initiate PayPal payment.");
                    }
                },
                onApprove: async function(data, actions) {
                    try {
                        const response = await fetch("{{ route('frontend.payment.paypal.capture-order') }}", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json",
                                "X-CSRF-TOKEN": "{{ csrf_token() }}"
                            },
                            body: JSON.stringify({
                                orderID: data.orderID
                            })
                        });
                        const orderData = await response.json();
                        
                        const errorDetail = Array.isArray(orderData.details) && orderData.details[0];
                        if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED') {
                            return actions.restart();
                        }
                        if (errorDetail) {
                            alert("Transaction failed: " + errorDetail.description);
                            return;
                        }
                        
                        // Capture successful, submit the form with payment ID
                        const hiddenInput = document.createElement('input');
                        hiddenInput.setAttribute('type', 'hidden');
                        hiddenInput.setAttribute('name', 'payment_intent_id');
                        hiddenInput.setAttribute('value', data.orderID); // Store PayPal Order ID
                        form.appendChild(hiddenInput);
                        form.submit();
                    } catch (error) {
                        console.error("PayPal capture error:", error);
                        alert("Transaction could not be completed.");
                    }
                }
            }).render('#paypal-button-container');
        }

        // Dynamic State and City Loading
        const stateSelect = document.getElementById('state-select');
        const citySelect = document.getElementById('city-select');

        countrySelect.addEventListener('change', async function() {
            const countryName = this.value;
            
            // Revert to select if it was changed to input previously
            if(stateSelect.tagName === 'INPUT') {
                const newSelect = document.createElement('select');
                newSelect.name = 'state';
                newSelect.id = 'state-select';
                newSelect.className = 'form-select';
                newSelect.required = true;
                stateSelect.parentNode.replaceChild(newSelect, stateSelect);
                // Update reference
                document.getElementById('state-select').addEventListener('change', window.handleStateChange);
            }
            
            const currentStateSelect = document.getElementById('state-select');
            const currentCitySelect = document.getElementById('city-select');
            
            currentStateSelect.innerHTML = '<option value="">Loading...</option>';
            currentStateSelect.disabled = true;
            
            if(currentCitySelect.tagName === 'SELECT') {
                currentCitySelect.innerHTML = '<option value="">Select City</option>';
                currentCitySelect.disabled = true;
            }

            if (!countryName) return;

            try {
                const response = await fetch("https://countriesnow.space/api/v0.1/countries/states", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ country: countryName })
                });
                
                if (!response.ok) throw new Error("API Network response was not ok");
                
                const data = await response.json();

                if (data.error === false && data.data.states.length > 0) {
                    currentStateSelect.innerHTML = '<option value="">Select State</option>';
                    data.data.states.forEach(state => {
                        currentStateSelect.innerHTML += `<option value="${state.name}">${state.name}</option>`;
                    });
                    currentStateSelect.disabled = false;
                } else {
                    throw new Error("No states found for this country");
                }
            } catch (error) {
                console.error("Falling back to text input for state:", error);
                // Fallback to text input
                const input = document.createElement('input');
                input.type = 'text';
                input.name = 'state';
                input.id = 'state-select';
                input.className = 'form-control';
                input.placeholder = 'Type your state';
                input.required = true;
                currentStateSelect.parentNode.replaceChild(input, currentStateSelect);
                
                // Also fallback city to text input
                const cityInput = document.createElement('input');
                cityInput.type = 'text';
                cityInput.name = 'city';
                cityInput.id = 'city-select';
                cityInput.className = 'form-control';
                cityInput.placeholder = 'Type your city';
                cityInput.required = true;
                currentCitySelect.parentNode.replaceChild(cityInput, currentCitySelect);
            }
        });

        window.handleStateChange = async function() {
            const countryName = countrySelect.value;
            const stateName = this.value;
            
            // Only proceed if it's a select element
            if(this.tagName !== 'SELECT') return;
            
            const currentCitySelect = document.getElementById('city-select');
            
            if(currentCitySelect.tagName === 'INPUT') {
                const newSelect = document.createElement('select');
                newSelect.name = 'city';
                newSelect.id = 'city-select';
                newSelect.className = 'form-select';
                newSelect.required = true;
                currentCitySelect.parentNode.replaceChild(newSelect, currentCitySelect);
            }
            
            const activeCitySelect = document.getElementById('city-select');
            activeCitySelect.innerHTML = '<option value="">Loading...</option>';
            activeCitySelect.disabled = true;

            if (!stateName) return;

            try {
                const response = await fetch("https://countriesnow.space/api/v0.1/countries/state/cities", {
                    method: "POST",
                    headers: { "Content-Type": "application/json" },
                    body: JSON.stringify({ country: countryName, state: stateName })
                });
                
                if (!response.ok) throw new Error("API Network response was not ok");
                
                const data = await response.json();

                if (data.error === false && data.data.length > 0) {
                    activeCitySelect.innerHTML = '<option value="">Select City</option>';
                    data.data.forEach(city => {
                        activeCitySelect.innerHTML += `<option value="${city}">${city}</option>`;
                    });
                    activeCitySelect.disabled = false;
                } else {
                    throw new Error("No cities found");
                }
            } catch (error) {
                console.error("Falling back to text input for city:", error);
                // Fallback to text input
                const input = document.createElement('input');
                input.type = 'text';
                input.name = 'city';
                input.id = 'city-select';
                input.className = 'form-control';
                input.placeholder = 'Type your city';
                input.required = true;
                activeCitySelect.parentNode.replaceChild(input, activeCitySelect);
            }
        };

        stateSelect.addEventListener('change', window.handleStateChange);

        form.addEventListener('submit', async function(e) {
            const selectedMethod = document.querySelector('input[name="payment_method"]:checked').value;
            
            if (selectedMethod === 'Stripe') {
                e.preventDefault();
                submitButton.disabled = true;
                submitButton.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i> Processing...';

                try {
                    const response = await fetch("{{ route('frontend.payment.stripe.create-intent') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}",
                            "Accept": "application/json"
                        },
                        credentials: "same-origin"
                    });
                    
                    const data = await response.json();
                    
                    if (data.error) {
                        alert(data.error);
                        submitButton.disabled = false;
                        submitButton.innerText = 'PLACE ORDER';
                        return;
                    }

                    const result = await stripe.confirmCardPayment(data.clientSecret, {
                        payment_method: {
                            card: card,
                            billing_details: {
                                name: form.first_name.value + ' ' + form.last_name.value,
                                email: form.email.value,
                                phone: form.phone.value,
                                address: {
                                    line1: form.address.value,
                                    city: form.city.value,
                                    state: form.state.value,
                                    country: form.country.value
                                }
                            }
                        }
                    });

                    if (result.error) {
                        document.getElementById('card-errors').textContent = result.error.message;
                        submitButton.disabled = false;
                        submitButton.innerText = 'PLACE ORDER';
                    } else {
                        if (result.paymentIntent.status === 'succeeded') {
                            // Add payment intent ID to form and submit
                            const hiddenInput = document.createElement('input');
                            hiddenInput.setAttribute('type', 'hidden');
                            hiddenInput.setAttribute('name', 'payment_intent_id');
                            hiddenInput.setAttribute('value', result.paymentIntent.id);
                            form.appendChild(hiddenInput);
                            form.submit();
                        }
                    }
                } catch (error) {
                    console.error(error);
                    alert('An error occurred during payment.');
                    submitButton.disabled = false;
                    submitButton.innerText = 'PLACE ORDER';
                }
            }
        });
    });
</script>
@endpush
