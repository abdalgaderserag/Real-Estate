<div>
    <div>
        <input type="search" live:model="search" name="search" id="search">
    </div>
    <div>
        @forelse ($estates as $estate)
            {{ $estate->title }}<br>
            {{-- {{ $estate->images[0] }}<br> --}}
            @if ($estate->rent)
                {{ $estate->price . " per month"}}
            @else
                {{ $estate->price }}
            @endif
            <br>
            {{ $estate->type }}
        @empty
            <h2>there is no houses at the moment</h2>
        @endforelse
    </div>
</div>
