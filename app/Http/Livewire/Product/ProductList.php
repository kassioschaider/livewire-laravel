<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ProductList extends Component
{
    public function render()
    {
        $products = Product::get();
        return view('livewire.product.product-list', compact('products'));
    }
}
