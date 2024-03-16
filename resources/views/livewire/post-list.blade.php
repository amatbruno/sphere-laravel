<div class=" px-3 lg:px-7 py-6">
    <div class="flex justify-between items-center border-b border-gray-100">
        <div class="text-white text-xl">
            @if ($search)
                Searched <em><strong>'{{ $search }}'</strong></em>
            @endif
        </div>
        <div class="flex items-center gap-5 font-light border-b border-gray-700">
            <p class="text-white text-lg">ORDER BY:</p>
            <div class="flex gap-3">
                <button
                    class="{{ $sort === 'desc' ? 'bg-red-700 text-white' : ' text-red-700 bg-transparent' }} my-4 p-1.5 px-5 border-2 border-red-800 rounded-xl"
                    wire:click="setSort('desc')">Latest</button>
                <button
                    class="{{ $sort === 'asc' ? 'bg-red-700 text-white' : ' text-red-700 bg-transparent' }} my-4 p-1.5 px-5 border-2 border-red-800 rounded-xl"
                    wire:click="setSort('asc')">Oldest</button>
            </div>
        </div>
    </div>
    <div class="py-4">
        @foreach ($this->posts as $post)
            <x-posts.post-item :post="$post" />
        @endforeach
    </div>
    <div class="my-3 text-white">
        {{ $this->posts->onEachSide(1)->links() }}
    </div>
</div>
