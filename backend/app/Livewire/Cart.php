<?php

namespace App\Livewire;

use Livewire\Component;
use Modules\Product\Models\Product;

class Cart extends Component
{
    public $cart = [];
    public $total = 0;

    protected $listeners = ['addToCart' => 'add'];

    public function mount()
    {
        $this->cart = session()->get('cart', []);
        $this->calculateTotal();
    }

    public function add($productId, $quantity = 1)
    {
        $product = Product::findOrFail($productId);

        if (isset($this->cart[$productId])) {
            $this->cart[$productId]['quantity'] += $quantity;
        } else {
            $this->cart[$productId] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->sale_price ?: $product->price,
                'quantity' => $quantity,
                'image' => $product->image,
                'slug' => $product->slug,
            ];
        }

        $this->saveCart();
        $this->dispatch('cartUpdated');
        
        session()->flash('success', 'Product added to cart!');
    }

    public function updateQuantity($productId, $quantity)
    {
        if (isset($this->cart[$productId])) {
            $this->cart[$productId]['quantity'] = max(1, $quantity);
            $this->saveCart();
        }
    }

    public function remove($productId)
    {
        if (isset($this->cart[$productId])) {
            unset($this->cart[$productId]);
            $this->saveCart();
            $this->dispatch('cartUpdated');
        }
    }

    public function clear()
    {
        $this->cart = [];
        $this->saveCart();
        $this->dispatch('cartUpdated');
    }

    private function saveCart()
    {
        session()->put('cart', $this->cart);
        $this->calculateTotal();
    }

    private function calculateTotal()
    {
        $this->total = array_reduce($this->cart, function ($carry, $item) {
            return $carry + ($item['price'] * $item['quantity']);
        }, 0);
    }

    public function render()
    {
        return view('livewire.cart');
    }
}
