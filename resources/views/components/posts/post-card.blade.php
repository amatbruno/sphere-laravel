@props(['post'])

<div class="m-auto">
    <a href="{{ route('posts.show', $post->slug) }}">
        <div>
            <img class="w-[520px] h-[330px] rounded-xl" src=" {{ $post->getThumbnailImage() }} " alt="">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center mb-2">
            <a class="bg-red-600 text-white rounded-xl px-3 py-1 text-sm mr-3" href="">
                Laravel
            </a>
            <p class="text-gray-300 text-sm">{{ $post->published_at }}</p>
        </div>
        <a href="{{ route('posts.show', $post->slug) }}" class="text-xl font-bold text-white">{{ $post->title }}</a>
    </div>
</div>
