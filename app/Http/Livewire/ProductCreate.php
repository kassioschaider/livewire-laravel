<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCreate extends Component
{
    public $bar_code;
    public $name;

    protected $rules = [
        'bar_code' => 'required',
        'name' => 'required',
    ];

    public function create()
    {
        $this->validate();
        Product::create([
            'bar_code' => $this->bar_code,
            'name' => $this->name,
        ]);
    }

    public function render()
    {
        return view('livewire.product-create');
    }
}
