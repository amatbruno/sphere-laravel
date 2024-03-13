<div class="flex gap-4">
    <x-nav-link class="bg-white text-black items-center py-1 px-3 rounded-lg text-md font-semibold shadow-xl hover:bg-slate-200 transition-all"
        href="{{ route('login') }}" :active="request()->routeIs('login')">
        {{ __('Login') }}
    </x-nav-link>

    <x-nav-link class="bg-white text-black items-center py-1 px-3 rounded-lg text-md font-semibold shadow-xl hover:bg-slate-200 transition-all"
        href="{{ route('register') }}" :active="request()->routeIs('register')">
        {{ __('Register') }}
    </x-nav-link>
</div>
