<?php

namespace App\Livewire;

use Livewire\Component;
use Modules\Product\Models\Product;

class RecentProducts extends Component
{
    public $limit;

    public function render()
    {
        $limit = $this->limit;

        $limit = $limit > 0 ? $limit : 5;

        $recentProducts = Product::recentlyPublished()->take($limit)->get();

        return view('livewire.recent-products', compact('recentProducts'));
    }
}
