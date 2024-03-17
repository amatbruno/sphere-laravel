<div class="mt-10 comments-box border-t border-gray-100 pt-10">
    <h2 class="text-2xl font-semibold text-white mb-5">Comments Section</h2>
    @auth
        <textarea wire:model="comment"
            class="w-full rounded-lg p-4 bg-gray-200 focus:border-red-800 text-sm focus:outline-none border-gray-200 placeholder:text-gray-500"
            cols="30" rows="7" placeholder="Enter your comment here..."></textarea>
        <button wire:click="postComment"
            class="mt-3 inline-flex items-center justify-center h-10 px-4 font-medium tracking-wide text-white transition duration-200 bg-red-800 rounded-lg hover:bg-red-900 focus:shadow-outline focus:outline-none">
            Post Comment
        </button>
    @else
        <a wire:navigate class="text-red-500 underline py-1" href=" {{ route('login') }} "> Login to Post Comments</a>
    @endauth
    <div class="user-comments px-3 py-2 mt-5 mb-7">
        @forelse($this->comments as $comment)
            <div class="comment [&:not(:last-child)]:border-b border-gray-100 py-5">
                <div class="user-meta flex mb-4 text-sm items-center">
                    <img class="w-7 h-7 rounded-full mr-3" src="" alt="mn">
                    <span class="mr-1 text-white text-base">User</span>
                    <span class="text-gray-400"> - {{  $comment->created_at->diffForHumans() }}</span>
                </div>
                <div class="text-justify text-white text-sm">
                    {{ $comment->comment }}
                </div>
            </div>
        @empty
            <div class="text-gray-500 text-center">
                <span> No Comments Posted</span>
            </div>
        @endforelse
    </div>
</div>
