
<div class="flex w-full">
    <div class="container w-10/12 mx-auto px-4 py-8">
        <div class="mb-4">
            <input type="search" live:model="search" name="search" id="search" class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Search Estates">
        </div>
        <div>
            @forelse ($estates as $estate)
                <div class="bg-white shadow-md rounded-xl mb-4">
                    {{-- <img src="{{ url('images/estate.jpeg')}}" class="w-full rounded-t-xl h-96"> --}}
                    <div class="bg-cover bg-center w-full rounded-t-xl h-96" style="background-image: url('images/estate.jpeg')"></div>
                    <div class="m-3 pb-3">
                        <h2 class="text-xl font-bold mb-2">{{ $estate->title }}</h2>
                        <p class="text-gray-700">
                            @if ($estate->rent)
                                {{ $estate->price }} per month
                            @else
                                {{ $estate->price }}
                            @endif
                        </p>
                        <p class="text-gray-500">{{ $estate->type }}</p>
                    </div>
                </div>
            @empty
                <p class="text-center text-gray-500">There are no houses at the moment.</p>
            @endforelse
        </div>
    </div>

    <div class="w-3/12">
    </div>
</div>
