<?php

namespace App\Livewire;

use Livewire\Component;

class CartIcon extends Component
{
    public $count = 0;

    protected $listeners = ['cartUpdated' => 'updateCount', 'addToCart' => 'add'];

    public function mount()
    {
        $this->updateCount();
    }

    public function updateCount()
    {
        $cart = session()->get('cart', []);
        $this->count = count($cart);
    }

    public function add($productId, $quantity = 1)
    {
        // This handles the add to cart logic when triggered from any page
        $cartComponent = new Cart();
        $cartComponent->add($productId, $quantity);
        $this->updateCount();
    }

    public function render()
    {
        return view('livewire.cart-icon');
    }
}
