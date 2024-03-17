<x-app-layout>
    <article class="col-span-4 md:col-span-3 mt-10 mx-auto py-5 w-full" style="max-width:700px">
        <h1 class="text-4xl font-bold text-left text-white">
            {{ $post->title }}
        </h1>
        <img class="w-full my-2 rounded-lg" src="{{ $post->getThumbnailImage() }}" alt="post_thumbnail">
        <div class="mt-2 flex justify-between items-center">
            <div class="flex py-5 text-base items-center">
                <x-posts.author :author="$post->author" size="md" />
                <span class="text-gray-400 text-sm">| {{ $post->getReadingTime() }} min reading time</span>
            </div>
            <div class="flex items-center">
                <span class="text-gray-400 mr-2">{{ $post->published_at->diffForHumans() }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3"
                    stroke="currentColor" class="w-5 h-5 text-gray-400">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>
        <div class="article-actions-bar mb-6 flex text-sm justify-end border-b border-gray-100 py-4 px-2">
            <div class="flex items-center">
                <livewire:like-button :key="'likebutton-' . $post->id" :$post />
            </div>
        </div>

        <div class="article-content py-3 text-white text-xl text-justify leading-relaxed">
            {{ $post->body }}
        </div>

        <div class="flex items-center space-x-4 mt-10 mb-4">
            <a href="#" class="bg-blue-400 text-white rounded-xl px-3 py-1 text-base">
                Tailwind</a>
            <a href="#" class="bg-red-400 text-white rounded-xl px-3 py-1 text-base">
                Laravel</a>
        </div>

        <livewire:post-comments :key="'comments' . $post->id" :$post />

    </article>
</x-app-layout>
