<nav class="flex justify-around items-center">
    <div class="flex justify-center items-center gap-10">
        <div class="flex items-center justify-center">
            <a class="flex gap-1 text-white text-3xl font-bold" href="{{ url('/') }}">Sphere
                <x-application-mark />
            </a>
        </div>

        <x-nav-link class="text-white text-xl font-semibold transition-all"
            href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>
    </div>
    <div class="flex justify-center items-center">
        @auth()
            @include('layouts.partials.header-right-auth')
        @else
            @include('layouts.partials.header-right-guest')
        @endauth
    </div>
</nav>
