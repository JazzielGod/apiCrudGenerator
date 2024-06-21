<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $category?->name)" autocomplete="name" placeholder="Name"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')"/>
    </div>
    <div>
        <x-input-label for="description" :value="__('Description')"/>
        <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" :value="old('description', $category?->description)" autocomplete="description" placeholder="Description"/>
        <x-input-error class="mt-2" :messages="$errors->get('description')"/>
    </div>
    <div>
        <x-input-label for="door" :value="__('Door')"/>
        <x-text-input id="door" name="door" type="text" class="mt-1 block w-full" :value="old('door', $category?->door)" autocomplete="door" placeholder="Door"/>
        <x-input-error class="mt-2" :messages="$errors->get('door')"/>
    </div>
    <div>
        <x-input-label for="product_id" :value="__('Product Id')"/>
        <x-text-input id="product_id" name="product_id" type="text" class="mt-1 block w-full" :value="old('product_id', $category?->product_id)" autocomplete="product_id" placeholder="Product Id"/>
        <x-input-error class="mt-2" :messages="$errors->get('product_id')"/>
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>