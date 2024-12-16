<div class="p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold mb-4">Add Real Estate</h1>

    <div class="mb-4">
        <label class="block text-gray-700">Title</label>
        <input wire:model="form.title" type="text" name="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" placeholder="Enter property title">
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Description</label>
        <textarea wire:model="form.description" name="description" cols="30" rows="10" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" placeholder="Enter property description"></textarea>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Upload Images</label>
        <input accept="image/jpg, image/jpeg, image/png"
            wire:model="form.images.{{ count($form['images']) }}.image"
            wire:loading.attr="disabled"
            wire:target="form.images.{{ count($form['images']) }}.image"
            type="file"
            name="image"
            class="mt-1">
        <span wire:loading wire:target="form.images.{{ count($form['images']) }}.image" class="text-blue-500">
            uploading...
        </span>
    </div>

    @forelse ($form['images'] as $index => $image)
        <div class="mb-4">
            <img src="{{ $image['image']->temporaryUrl() }}" class="w-32 h-32 object-cover rounded-lg">
            <button wire:click="deleteImage({{ $index }})" class="mt-2 text-red-500">delete</button>
        </div>
    @empty
        <p class="text-gray-500">No images uploaded</p>
    @endforelse

    <div class="mb-4">
        <label class="block text-gray-700">Rooms</label>
        @for ($number_rooms = 0; $number_rooms < $r; $number_rooms++)
            <div class="flex mb-2">
                <input wire:model="form.rooms[{{ $number_rooms }}].x" type="text" placeholder="X" class="border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 w-1/2 mr-2">
                <input wire:model="form.rooms[{{ $number_rooms }}].y" type="text" placeholder="Y" class="border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 w-1/2">
            </div>
        @endfor
        <button wire:click="addRoom" class="text-blue-500">add room</button>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Bathrooms</label>
        @for ($number_bathrooms = 0; $number_bathrooms < $b; $number_bathrooms++)
            <div class="flex mb-2">
                <input wire:model="form.bathrooms[{{ $number_bathrooms }}].x" type="text" placeholder="X" class="border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 w-1/2 mr-2">
                <input wire:model="form.bathrooms[{{ $number_bathrooms }}].y" type="text" placeholder="Y" class="border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 w-1/2">
            </div>
        @endfor
        <button wire:click="addBathroom" class="text-blue-500">add bathroom</button>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Halls</label>
        @for ($number_halls = 0; $number_halls < $h; $number_halls++)
            <div class="flex mb-2">
                <input wire:model="form.halls[{{ $number_halls }}].x" type="text" placeholder="X" class="border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 w-1/2 mr-2">
                <input wire:model="form.halls[{{ $number_halls }}].y" type="text" placeholder="Y" class="border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 w-1/2">
            </div>
        @endfor
        <button wire:click="addHall" class="text-blue-500">add hall</button>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Kitchens</label>
        @for ($number_kitchens = 0; $number_kitchens < $k; $number_kitchens++)
            <div class="flex mb-2">
                <input wire:model="form.kitchens[{{ $number_kitchens }}].x" type="text" placeholder="X" class="border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 w-1/2 mr-2">
                <input wire:model="form.kitchens[{{ $number_kitchens }}].y" type="text" placeholder="Y" class="border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 w-1/2">
            </div>
        @endfor
        <button wire:click="addKitchen" class="text-blue-500">add kitchen</button>
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Number of Floors</label>
        <input wire:model="form.floors" type="number" placeholder="Number of floors" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200">
    </div>

    <div class="mb-4">
        <input wire:model.live="form.rent" type="checkbox" name="rent" id="rent" class="mr-2">
        <label for="rent" class="text-gray-700">This property is for rent</label>
    </div>

    <div class="mb-4">
        @if ($form['rent'])
            <input wire:model="form.price" type="number" placeholder="Price per month" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200">
        @else
            <input wire:model="form.price" type="number" placeholder="Price" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200">
        @endif
    </div>

    <div class="mb-4">
        <label class="block text-gray-700">Property Type</label>
        <select wire:model="form.type" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200">
            @foreach (config('estate.type') as $type)
                <option>{{ $type }}</option>
            @endforeach
        </select>
    </div>

    <button wire:click="saveEstate" class="w-full bg-blue-500 text-white rounded-md py-2 hover:bg-blue-600">Add Real Estate</button>
</div>
