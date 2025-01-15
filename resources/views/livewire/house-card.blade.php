<div class="bg-white shadow-md rounded-xl mb-4">

    {{-- <img src="{{ url('images/estate.jpeg')}}" class="w-full rounded-t-xl h-96"> --}}
    <div class="bg-cover bg-center w-full rounded-t-xl h-96 p-4" style="background-image: url('{{ $estate->images[0] }}')">
        <span class="text-white px-4 py-1 rounded-full bg-orange-500">
            {{ $estate->type }}
        </span>
    </div>
    <div class="m-3 pb-3">
        <h2 class="text-xl text-gray-700 font-bold mb-2">
            <a class="hover:text-blue-900" href="{{ route('estate.show', $estate->id ) }}">{{ $estate->title }}</a>
            <span class="text-gray-500 text-md">{{ $estate->created_at }}</span>
        </h2>
        <hr>
        <p class="my-4">
            {{ $estate->description }}
        </p>
        <div class="flex justify-between w-1/2">
            <div class="flex">
                <img class="mr-2" src="{{ url('') }}">
                {{ count($estate->detail->rooms) }}
            </div>
            <div class="flex">
                <img class="mr-2" src="{{ url('') }}">
                {{ count($estate->detail->halls) }}
            </div>
            <div class="flex">
                <img class="mr-2" src="{{ url('') }}">
                {{ count($estate->detail->kitchen) }}
            </div>
            <div class="flex">
                <img class="mr-2" src="{{ url('') }}">
                {{ $estate->detail->floors }}
            </div>
        </div>
        <hr class="my-3">
        <p class="text-gray-600">
            <span class="text-xl">{{ config('estate.sign') }}</span>
            <span>
                @if ($estate->rent)
                    {{ $estate->price }} per month
                @else
                    {{ $estate->price }}
                @endif
            </span>
            <a href="{{ route('estate.show', $estate->id )}}">
                <button class="bg-orange-500 text-white px-4 pb-1 ml-4 rounded-full hover:bg-orange-400">
                    view
                </button>
            </a>
        </p>
    </div>
</div>
