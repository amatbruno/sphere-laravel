@props(['post'])
<article class="[&:not(:last-child)]:border-b border-gray-100 pb-10">
    <div class="article-body grid grid-cols-12 gap-3 mt-5 items-start">
        <div class="article-thumbnail col-span-4 flex items-center">
            <a href="">
                <img class="mw-150 h-64 mx-auto rounded-xl text-white" src="{{ $post->image }}" alt="thumbnail">
            </a>
        </div>
        <div class="col-span-8">
            <div class="article-meta flex py-1 text-sm items-center">
                <img class="w-8 h-8 rounded-full mr-3" src="{{ $post->author->profile_photo_url }}"
                    alt="{{ $post->author->name }}">
                <div class="flex gap-5 items-center">
                    <span class="mr-1 text-lg text-white">{{ $post->author->name }}</span>
                    <span class="text-white text-sm">{{ $post->published_at->diffForHumans() }}</span>
                </div>
            </div>
            <h2 class="text-2xl font-bold text-white mt-2">
                <a href="http://127.0.0.1:8000/blog/first%20post">
                    {{ $post->title }}
                </a>
            </h2>

            <p class="mt-2 text-lg text-white font-light">
                {{ $post->getExcerpt() }}
            </p>
            <div class="article-actions-bar mt-6 flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <span class="text-white text-sm">{{ $post->getReadingTime() }} minute reading</span>
                </div>
                <div>
                    <a class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 text-white hover:text-red-800">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                        <span class="text-white ml-2">
                            1
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</article>
