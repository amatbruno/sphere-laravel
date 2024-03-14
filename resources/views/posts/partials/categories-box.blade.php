<div>
    <h3 class="text-lg font-semibold text-white mb-3">Recommended Topics</h3>
    <div class="topics flex flex-wrap justify-start">
        @foreach ($categories as $categoryTitle)
            <a href="#"
                class="bg-red-600 
                            text-white 
                            rounded-xl px-3 py-1 text-base">
                {{ $categoryTitle }}
            </a>
        @endforeach
    </div>
</div>
