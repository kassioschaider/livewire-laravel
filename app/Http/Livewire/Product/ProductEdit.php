<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ProductEdit extends Component
{
    public $productId; //chamar de nome diferente para não ter conflito com o id do componente
    public $bar_code;
    public $name;

    protected $rules = [
        'bar_code' => 'required|min:13',
        'name' => 'required|min:3',
    ];

    public function mount(Product $product)
    {
        //$product = Product::find($product); //ISSO AQUI È OUTRA FORMA, NO CASO USADO, TIPANDO O PRODUCT JÁ É BUSCADO

        $this->bar_code = $product->bar_code;
        $this->name = $product->name;
        $this->productId = $product->id;
    }

    public function update()
    {
        $product = Product::find($this->productId);

        $this->validate();

        $product->update([
            'bar_code' => $this->bar_code,
            'name' => $this->name,
        ]);

        session()->flash('message', 'Update successfully!');
    }

    public function render()
    {
        return view('livewire.product.product-edit');
    }
}
