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
                    <livewire:like-button :key="$post->id" :$post/>
                </div>
            </div>
        </div>
    </div>
</article>
