<div>
    {{ $estate->title }}<br>
    {{ $estate->description }}<br>
    @if ($estate->rent)
        {{ $estate->price . " per month"}}<br>
    @else
        {{ $estate->price }}<br>
    @endif
    {{ $estate->detail }}<br> {{--  todo: expand--}}
    {{ $estate->type}}
</div>
