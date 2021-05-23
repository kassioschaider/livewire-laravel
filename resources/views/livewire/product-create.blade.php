<div>
    <h2>Create Product</h2>

    <form wire:submit.prevent="create" method="post">

        <label for="barCode">Bar Code</label>

        <input type="text" wire:model="barCode">
        <div class="error-message">
            @error('barCode')
            {{$message}}
            @enderror
        </div>

        <label for="name">Name</label>

        <input type="text" wire:model="name">
        <div class="error-message">
            @error('name')
            {{$message}}
            @enderror
        </div>

        <button class="btn btn-primary">Add</button>
    </form>
</div>
