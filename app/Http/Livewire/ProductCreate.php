<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProductCreate extends Component
{
    public $barCode;
    public $name;

    protected $rules = [
        'barCode' => 'required',
        'name' => 'required',
    ];

    public function create()
    {
        $this->validate();
        dd($this->name, $this->barCode);
    }

    public function render()
    {
        return view('livewire.product-create');
    }
}
