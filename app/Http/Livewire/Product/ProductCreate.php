<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ProductCreate extends Component
{
    public $bar_code;
    public $name;

    protected $rules = [
        'bar_code' => 'required|min:13',
        'name' => 'required|min:3',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function create()
    {
        $this->validate();
        Product::create([
            'bar_code' => $this->bar_code,
            'name' => $this->name,
        ]);

        $this->bar_code = $this->name = null;

        session()->flash('message', 'Create successfully!');
    }

    public function render()
    {
        return view('livewire.product-create');
    }
}
