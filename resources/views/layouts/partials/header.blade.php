<header class="bg-red-800 py-4">
    <nav class="flex justify-around items-center">
        <div class="flex justify-center items-end gap-10">
            <a class="text-white text-3xl font-sans font-bold hover:shadow-lg transition-all"
                href="{{ url('/') }}">Sphere</a>
            <a class="text-white text-xl font-sans font-bold hover:shadow-lg transition-all"
                href="{{ url('/') }}">About</a>
            <a class="text-white text-xl font-sans font-bold hover:shadow-lg transition-all"
                href="{{ url('/') }}">News</a>
        </div>
        <div class="flex justify-center items-center">
            @guest
                @include('layouts.partials.header-right-guest')
            @endguest

            @auth()
                @include('layouts.partials.header-right-auth')
            @endauth

        </div>
    </nav>

</header>
