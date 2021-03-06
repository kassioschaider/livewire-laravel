<div class="container justify-center grid grid-flow-row">
    <h2 class="pb-8 pt-8 text-2xl">Create Product</h2>
    <form class="w-full max-w-lg" wire:submit.prevent="create" method="post">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label for="bar_code" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Bar Code</label>

                <input type="text" name="bar_code" id="bar_code" wire:model="bar_code"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                <div class="error-message">
                    @error('bar_code')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label for="name" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Name</label>

                <input type="text" name="name" id="name" wire:model="name"
                class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white">
                <div class="error-message">
                    @error('name')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
                    CREATE
                </button>
            </div>
        </div>

        <div class="pb-4">
            @if (session()->has('message'))
            <div class="bg-grey-100 border-t border-b border-dark-500 text-dark-700 px-4 py-3">
                <div class="text-sm">
                    {{ session('message') }}
                </div>
            </div>
            @endif
        </div>
    </form>

    {{-- <div class="pt-8">
        <a href="{{ route('list_product') }}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
            LIST
        </a>
    </div> --}}
</div>
