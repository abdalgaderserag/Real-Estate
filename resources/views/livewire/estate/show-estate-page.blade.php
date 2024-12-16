<div class="p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-2xl font-bold">{{ $estate->title }}</h1>
    <p class="mt-2 text-gray-600">{{ $estate->description }}</p>

    {{-- Uncomment this section to display images --}}
    {{-- @foreach ($estate->images as $image) --}}
        {{-- <img src="{{ $image }}" class="mt-4 w-32 h-32 object-cover rounded-lg"> --}}
    {{-- @endforeach --}}

    <p class="mt-4">
        @if ($estate->rent)
            Price: {{ $estate->price . " per month" }}
        @else
            Price: {{ $estate->price }}
        @endif
    </p>

    <div class="mt-4">
        <h2 class="text-lg font-semibold">Rooms</h2>
        @forelse ($estate->detail->rooms as $room)
            <p>{{ $room['x'] . '*' . $room['y'] }}</p>
        @empty
            <p>No rooms available</p>
        @endforelse

        @if ($estate->detail->floors >= 1)
            <p>Number of floors: {{ $estate->detail->floors }}</p>
        @endif
    </div>

    <p class="mt-4">Type: {{ $estate->type }}</p>
</div>
