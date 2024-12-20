<div class="flex w-full">

    <div class="w-3/12 mx-auto px-4 py-8 text-gray-700">
        <input type="search" wire:model.live="filter.search" name="search" id="search" class="border border-gray-300 rounded-md w-full px-4 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Search Estates">

        <div class="py-2 flex" style="flex-wrap: wrap">
            {{-- <div class="flex mt-3">
                <input wire:model="filter.type.all" type="checkbox" name="all" class="w-5 h-5 mr-1">
                <label for="all" class="mr-3">All</label>
            </div> --}}

            @foreach (config('estate.type') as $type)
                <div class="flex mt-3">
                    <input wire:model.live.live="filter.type.{{ $type }}" type="checkbox" name="{{ $type }}" class="w-5 h-5 mr-1">
                    <label for="{{ $type }}" class="mr-3">{{ $type }}</label>
                </div>
            @endforeach

        </div>

        <h4 class="my-2">Price :</h4>
        <div class="flex mb-2">
            <input wire:model.live="filter.min" type="number" placeholder="min price" class="border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 w-1/2 mr-2">
            <input wire:model.live="filter.max" type="number" placeholder="max price" class="border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200 w-1/2">
        </div>

        <div class="mb-2">
            <input wire:model.live="filter.rent" type="checkbox" name="rent" id="rent" class="mr-2">
            <label for="rent">show for rent only</label>
        </div>

        <div class="flex justify-between">
            <div class="w-1/2">
                <h4 class="ml-1">rooms :</h4>
                <div class="flex">
                    <button wire:click="decrease('rooms')" class="border-2 border-gray-300 rounded-full w-7 h-7 mr-2 @if($filter['rooms'] == 1)opacity-60 @endif">
                        <img src="{{ asset('/images/arrow.svg') }}" class="rounded-full rotate-90">
                    </button>
                    <span>{{ $filter['rooms'] }}</span>
                    <button wire:click="increase('rooms')" class="border-2 border-gray-300 rounded-full w-7 h-7 ml-2">
                        <img src="{{ asset('/images/arrow.svg') }}" class="rounded-full -rotate-90">
                    </button>
                </div>
            </div>

            <div class="w-1/2">
                <h4 class="ml-1">bathrooms :</h4>
                <div class="flex">
                    <button wire:click="decrease('bathrooms')" class="border-2 border-gray-300 rounded-full w-7 h-7 mr-2 @if($filter['bathrooms'] == 1)opacity-60 @endif">
                        <img src="{{ asset('/images/arrow.svg') }}" class="rounded-full rotate-90">
                    </button>
                    <span>{{ $filter['bathrooms'] }}</span>
                    <button wire:click="increase('bathrooms')" class="border-2 border-gray-300 rounded-full w-7 h-7 ml-2">
                        <img src="{{ asset('/images/arrow.svg') }}" class="rounded-full -rotate-90">
                    </button>
                </div>
            </div>
        </div>


        <div class="flex justify-between mt-4">
            <div class="w-1/2">
                <h4 class="ml-1">kitchens :</h4>
                <div class="flex">
                    <button wire:click="decrease('kitchens')" class="border-2 border-gray-300 rounded-full w-7 h-7 mr-2 @if($filter['kitchens'] == 1)opacity-60 @endif">
                        <img src="{{ asset('/images/arrow.svg') }}" class="rounded-full rotate-90">
                    </button>
                    <span>{{ $filter['kitchens'] }}</span>
                    <button wire:click="increase('kitchens')" class="border-2 border-gray-300 rounded-full w-7 h-7 ml-2">
                        <img src="{{ asset('/images/arrow.svg') }}" class="rounded-full -rotate-90">
                    </button>
                </div>
            </div>

            <div class="w-1/2">
                <h4 class="ml-1">floors :</h4>
                <div class="flex">
                    <button wire:click="decrease('floors')" class="border-2 border-gray-300 rounded-full w-7 h-7 mr-2 @if($filter['floors'] == 1)opacity-60 @endif">
                        <img src="{{ asset('/images/arrow.svg') }}" class="rounded-full rotate-90">
                    </button>
                    <span>{{ $filter['floors'] }}</span>
                    <button wire:click="increase('floors')" class="border-2 border-gray-300 rounded-full w-7 h-7 ml-2">
                        <img src="{{ asset('/images/arrow.svg') }}" class="rounded-full -rotate-90">
                    </button>
                </div>
            </div>
        </div>


    </div>


    {{-- Main page section --}}
    <div class="container text-gray-500 w-10/12 mx-auto px-4 py-8">
        <div>
            @forelse ($this->estates as $estate)
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
            @empty
                <p class="text-center text-gray-500">There are no houses at the moment.</p>
            @endforelse
        </div>
    </div>
</div>
