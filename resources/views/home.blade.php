<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    <style>
        body {
            background: #111827;
        }

        #container-blur {
            background: #ffffff1a;
            backdrop-filter: blur(18px);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .mini-container {
            background: #111827;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            transition: 0.3s ease-in-out;
            border: 3px transparent;
        }

        .mini-container:hover {
            border: 3px red solid;
            transition: 0.3s ease-in-out;
        }

        .mini-container h1 {
            pointer-events: auto;
            transition: 0.3s ease-in-out;
        }

        .mini-container:hover h1 {
            color: red;
            transition: 0.2s ease-in-out;
        }

        header a {
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }

        /*MEDIA QUERIES*/
        /* Media query for mobile screens */
        @media only screen and (max-width: 767px) {
            #background-red {
                height: 500px;
            }

            #container-blur {
                display: flex;
                flex-direction: column;
                justify-content: start;
                align-items: center;
                width: 500px;
                height: fit-content;
                padding-bottom: 20px;
                padding-top: 20px;
                gap: 2.5rem;
            }

            #container-blur .mini-container img {
                width: 180px
            }

            #container-blur .mini-container h1 {
                font-size: 20px;
                width: 240px;
                padding-top: 30px;
                padding-bottom: 30px;
            }

            #container-blur .mini-container a {
                font-size: 19px
            }
        }

        /* Media query for tablets in landscape mode */
        @media only screen and (min-width: 768px) and (max-width: 1023px) {
            #container-blur {
                display: grid;
                grid-template-columns: auto auto;
                gap: 2rem;
                width: 820px;
                height: fit-content;
                padding: 20px;
            }

            #container-blur .mini-container {
                width: 360px;

            }

            #container-blur .mini-container img {
                width: 150px
            }

            #container-blur .mini-container h1 {
                font-size: 19px;
                width: 230px;
            }
        }

        /* Media query for desktop */
        @media only screen and (min-width: 1024px) {
            #container-blur .mini-container {
                width: 380px;
            }

            #container-blur {
                width: 1400px;
            }
        }
    </style>
    @livewireStyles
</head>

<body class="antialiased">
    <main id="background-red" class="bg-red-800 h-[420px]">
        @auth()
            @include('layouts.partials.header')
        @else
        <header class="flex items-center gap-5 justify-end px-7 pt-4">
            <a class="bg-white p-2 px-5 rounded-lg font-semibold hover:bg-slate-200 transition-all"
                href="{{ route('register') }}">Get Started</a>
            <a class="bg-white p-2 px-5 rounded-lg font-semibold hover:bg-slate-200 transition-all"
                href="{{ route('login') }}">Sign In</a>
        </header>
        @endauth
        <div class="max-w-7xl mx-auto p-4 lg:p-8">
            <div class="flex justify-center items-center">
                <h1 class="text-8xl text-white font-bold text-center tracking-widest">SPHERE.</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="95" height="95" viewBox="0 0 24 24"
                    stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path
                        d="M18.816 13.58c2.292 2.138 3.546 4 3.092 4.9c-.745 1.46 -5.783 -.259 -11.255 -3.838c-5.47 -3.579 -9.304 -7.664 -8.56 -9.123c.464 -.91 2.926 -.444 5.803 .805" />
                    <path d="M12 12m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                </svg>
            </div>

            <p class="text-white text-2xl text-center mt-5">Discover. Inspire. Thrive.</p>
        </div>
        <div id="container-blur" class="h-[580px] m-auto mt-3 rounded-xl flex justify-center items-center gap-14">
            <div class="mini-container h-[480px] rounded-xl flex flex-col justify-center items-center p-7">
                <img class="w-52"
                    src="https://img.icons8.com/external-itim2101-lineal-itim2101/256/FFFFFF/external-blog-copywriting-itim2101-lineal-itim2101.png"
                    alt="blog_img">
                <h1 class="text-white text-center text-3xl py-5 w-[290px]">Post your idea and see what others are
                    thinking</h1>
            </div>
            <div class="mini-container h-[480px] rounded-xl flex flex-col justify-center items-center p-7">
                <img class="w-52" src="https://img.icons8.com/ios/256/FFFFFF/news.png" alt="blog_img">
                <h1 class="text-white text-center text-3xl py-5 w-[290px]">Explore all the categories and the new
                    features</h1>
            </div>
            <div class="mini-container h-[480px] rounded-xl flex flex-col justify-center items-center p-7">
                <img class="w-52" src="https://img.icons8.com/wired/256/FFFFFF/name.png" alt="blog_img">
                <h1 class="text-white text-center text-3xl py-5 w-[290px]">Manage your posts and customize your profile
                </h1>
            </div>
        </div>

        <div class="w-full mt-32">
            <h1 class="text-white w-fit p-4 text-5xl text-start font-bold ml-12 mb-5">FEATURED POSTS</h1>

            <div class="grid grid-cols-3 m-auto text-white text-center gap-5">
                @foreach ($featuredPosts as $post)
                    <x-posts.post-card :post="$post" />
                @endforeach
            </div>
        </div>

        <div class="w-full mt-32">
            <h1 class="text-white w-fit p-4 text-5xl text-start font-bold ml-12 mb-5">LATEST POSTS</h1>

            <div class="grid grid-cols-3 m-auto text-white text-center gap-5">
                @foreach ($latestPosts as $post)
                    <x-posts.post-card :post="$post" />
                @endforeach
            </div>
        </div>

        <div class="flex justify-center mt-12  px-0">
            <div class="text-center text-lg text-gray-100 sm:text-right sm:ml-0 mb-12">
                <p>Made by Bruno Amat</p>
            </div>
        </div>
    </main>
</body>

</html>
