<x-app-layout>
    <div class="w-full grid grid-cols-4 gap-10">
        <div class="md:col-span-3 col-span-4">
            <livewire:post-list />
        </div>
        <div id="side-bar"
            class="border-4 w-fit border-red-800 md:border-t-none col-span-4 md:col-span-1 px-3 md:px-6 space-y-10 py-6 pt-10 h-screen sticky top-0">
            <livewire:search-box/>
        </div>

        @include('posts.partials.categories-box')

        <div class="pt-5 flex justify-center">
            <img src="{{ url('banner-homepage.png') }}" alt="banner-ad" class="lg:w-[250px] md:none w-[320px]">
        </div>
    </div>
    </div>
</x-app-layout>
