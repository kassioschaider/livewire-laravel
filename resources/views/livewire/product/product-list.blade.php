<div class="container justify-center grid grid-flow-row">
    <h2 class="pb-8 pt-8 text-2xl text-center">List Product</h2>

    <div class="p-8">
        <a href="#" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
        Add Product</a>
    </div>
    <ul class="list-inside">
    @foreach ($products as $product)
        <li class="flex justify-between bg-gray-100">
            <div class="p-2">
            {{ "{$product->bar_code} - {$product->name}" }}
            </div>
            <span class="flex space-x-4 pl-8">
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-blue-400 rounded shadow">
                    Edit
                </button>
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-red-400 rounded shadow">
                    Delete
                </button>
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-green-400 rounded shadow">
                    Analyses
                </button>
            </span>

        </li>
    @endforeach
    </ul>
</div>
