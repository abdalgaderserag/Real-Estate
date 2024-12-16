<div>
    <input wire:model="form.title" type="text" name="title"><br><br>
    <textarea wire:model="form.description" name="description" cols="30" rows="10"></textarea><br><br>
    @for ($number_rooms = 0; $number_rooms < $r; $number_rooms++)
        <input wire:model="form.rooms[{{ $number_rooms }}].x" type="text" placeholder="X"> * <input wire:model="form.rooms[{{ $number_rooms }}].y" type="text" placeholder="Y"><br>
    @endfor
    <button wire:click="addRoom">add room</button><br><br>

    @for ($number_bathrooms = 0; $number_bathrooms < $b; $number_bathrooms++)
        <input wire:model="form.bathrooms[{{ $number_bathrooms }}].x" type="text" placeholder="X"> * <input wire:model="form.bathrooms[{{ $number_bathrooms }}].y" type="text" placeholder="Y"><br>
    @endfor
    <button wire:click="addBathroom">add bathroom</button><br><br>

    @for ($number_halls = 0; $number_halls < $h; $number_halls++)
        <input wire:model="form.halls[{{ $number_halls }}].x" type="text" placeholder="X"> * <input wire:model="form.halls[{{ $number_halls }}].y" type="text" placeholder="Y"><br>
    @endfor
    <button wire:click="addHall">add hall</button><br><br>

    @for ($number_kitchens = 0; $number_kitchens < $k; $number_kitchens++)
        <input wire:model="form.kitchens[{{ $number_kitchens }}].x" type="text" placeholder="X"> * <input wire:model="form.kitchens[{{ $number_kitchens }}].y" type="text" placeholder="Y"><br>
    @endfor
    <button wire:click="addKitchen">add kitchen</button><br><br>

    <input wire:model="form.floors" type="number" placeholder="number of floors"><br><br>

    <input wire:model.live="form.rent" type="checkbox" name="rent"><label for="rent"> this property is for rent</label><br><br>
    @if ($form["rent"])
        <input wire:model="form.price" type="number" placeholder="price per month"><br><br>
    @else
        <input wire:model="form.price" type="number" placeholder="price"><br><br>
    @endif

    <select wire:model="form.type">
        @foreach (config('estate.type') as $type)
            <option>{{ $type }}</option>
        @endforeach
    </select><br><br>

    <button wire:click="saveEstate">Add Real Estate</button>
</div>
