<div class="container mx-auto px-4 py-8">
    <div class="mb-4">
        <input type="search" live:model="search" name="search" id="search" class="border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Search Estates">
    </div>
    <div>
        @forelse ($estates as $estate)
            <div class="bg-white shadow-md rounded-md p-4 mb-4">
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
        @empty
            <p class="text-center text-gray-500">There are no houses at the moment.</p>
        @endforelse
    </div>
</div>
