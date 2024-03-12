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
            main {
                background-color: #111827;
            }
            img {
                box-shadow: rgba(3, 3, 46, 0.315) 0px 7px 29px 0px;
            }
            #sign-in-btn {
                box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            }
            #sign-up-btn {
                box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            }
    
            /* MEDIA QUERIES */
            /* Media query for mobile screens */
            @media only screen and (max-width: 767px) {
                
            }
    
            /* Media query for tablets in landscape mode */
            @media only screen and (min-width: 768px) and (max-width: 1023px) {
                
            }
    
            /* Media query for desktop */
            @media only screen and (min-width: 1024px) {
            
            }
        </style>
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />
        @include('layouts.partials.header')

            {{-- <header class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
                <div id="header-left" class="flex items-center">
                    <div class="text-gray-800 font-semibold">
                        <span class="text-yellow-500 text-xl">SPHERE</span> Code
                    </div>
                    <div class="top-menu ml-10">
                        <ul class="flex space-x-4">
                            <li>
                                <a class="flex space-x-2 items-center hover:text-yellow-900 text-sm text-yellow-500"
                                    href="http://127.0.0.1:8000">
                                    Home
                                </a>
                            </li>
        
                            <li>
                                <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
                                    href="http://127.0.0.1:8000/blog">
                                    Blog
                                </a>
                            </li>
        
                            <li>
                                <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
                                    href="http://127.0.0.1:8000/blog">
                                    About Us
                                </a>
                            </li>
        
                            <li>
                                <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
                                    href="http://127.0.0.1:8000/blog">
                                    Contact Us
                                </a>
                            </li>
        
                            <li>
                                <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
                                    href="http://127.0.0.1:8000/blog">
                                    Terms
                                </a>
                            </li>
        
                        </ul>
                    </div>
                </div>
                <div id="header-right" class="flex items-center md:space-x-6">
                    <div class="flex space-x-5">
                        <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
                            href="http://127.0.0.1:8000/login">
                            Login
                        </a>
                        <a class="flex space-x-2 items-center hover:text-yellow-500 text-sm text-gray-500"
                            href="http://127.0.0.1:8000/register">
                            Register
                        </a>
                    </div>
                </div>
            </header> --}}
        
        <main class="container mx-auto px-5 flex flex-grow">
            {{ $slot }}
        </main>
        
        @include('layouts.partials.footer')

        @stack('modals')
        @livewireScripts
    </body>
</html>
