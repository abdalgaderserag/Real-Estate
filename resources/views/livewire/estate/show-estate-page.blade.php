<div>
    {{ $estate->title }}<br>
    {{ $estate->description }}<br>
    {{-- @foreach ($estate->images as $image)
        <img src="{{ $image }}">
    @endforeach --}}
    @if ($estate->rent)
        {{ $estate->price . " per month"}}<br>
    @else
        {{ $estate->price }}<br>
    @endif


    @forelse ($estate->detail->rooms as $room)
        {{ $room['x'] . '*' . $room['y']}}<br>
    @empty

    @if ($estate->detail->floors >= 1)
        number of floors {{ $estate->detail->floors }}
    @endif

    @endforelse
    {{ $estate->type }}
</div>
