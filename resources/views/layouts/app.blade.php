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
    
            #background-red {
                height: 420px;
            }
    
            #container-blur {
                background: #ffffff1a;
                backdrop-filter: blur(18px);
                box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            }
    
            .mini-container {
                background: #111827;
                box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            }
    
            .mini-container:hover {
                border: 3px red solid;
            }
    
            .mini-container img {
                pointer-events: auto;
            }
    
            .mini-container:hover a {
                background: red;
                transition: 0.3s ease-in-out;
                color: white;
            }
    
            header a {
                box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
            }
    
            /* MEDIA QUERIES */
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
    <body class="font-sans antialiased">
        <x-banner />

            <header class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
                <div id="header-left" class="flex items-center">
                    <div class="text-gray-800 font-semibold">
                        <span class="text-yellow-500 text-xl">&lt;YELO&gt;</span> Code
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
            </header>
        
            <main class="container mx-auto px-5 flex flex-grow">
                <div class="mb-10">
                    <div class="mb-16">
                        <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Featured Posts</h2>
                        <div class="w-full">
                            <div class="grid grid-cols-3 gap-10 w-full">
                                <div class="md:col-span-1 col-span-3">
                                    <a href="http://127.0.0.1:8000/blog/laravel-34">
                                        <div>
                                            <img class="w-full rounded-xl"
                                                src="http://127.0.0.1:8000/storage/3i5uKG05UnvhbORZ3ieDkvtAOL8ss5-metaZXAxNSAoMjIpLnBuZw==-.png">
                                        </div>
                                    </a>
                                    <div class="mt-3">
                                        <div class="flex items-center mb-2">
                                            <a href="http://127.0.0.1:8000/categories/laravel" class="bg-red-600 
                                                text-white 
                                                rounded-xl px-3 py-1 text-sm mr-3">
                                                Laravel
                                            </a>
                                            <p class="text-gray-500 text-sm">2023-09-05</p>
                                        </div>
                                        <a class="text-xl font-bold text-gray-900">Laravel 10 tutorial feed page #34</a>
                                    </div>
        
                                </div>
                                <div class="md:col-span-1 col-span-3">
                                    <a href="http://127.0.0.1:8000/blog/fil3tutorial">
                                        <div>
                                            <img class="w-full rounded-xl"
                                                src="http://127.0.0.1:8000/storage/4sEsCDleYEXT4GC7AdU8BP7TBab3cx-metaZmlsYW1lbnQgY291cnNlICg0KS5wbmc=-.png">
                                        </div>
                                    </a>
                                    <div class="mt-3">
                                        <div class="flex items-center mb-2">
                                            <a href="http://127.0.0.1:8000/categories/PHP" class="bg-blue-400 
                                                text-white 
                                                rounded-xl px-3 py-1 text-sm mr-3">
                                                PHP</a>
                                            <p class="text-gray-500 text-sm">2023-09-04</p>
                                        </div>
                                        <a class="text-xl font-bold text-gray-900">Filament 3 relationship manager tutorial
                                        </a>
                                    </div>
        
                                </div>
                                <div class="md:col-span-1 col-span-3">
                                   
                                        <div>
                                            <img class="w-full rounded-xl"
                                                src="https://via.placeholder.com/640x480.png/0000ee?text=corrupti">
                                        </div>
                                        <div class="mt-3">
                                            <div class="flex items-center mb-2">
                                                <p class="text-gray-500 text-sm">2023-08-29</p>
                                            </div>
                                            <a class="text-xl font-bold text-gray-900">Mary Berge</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
                            href="http://127.0.0.1:8000/blog">More
                            Posts</a>
                    </div>
                    <hr>
        
                    <h2 class="mt-16 mb-5 text-3xl text-yellow-500 font-bold">Latest Posts</h2>
                    <div class="w-full mb-5">
                        <div class="grid grid-cols-3 gap-10 gap-y-32 w-full">
                            <div class="md:col-span-1 col-span-3">
                                <a href="http://127.0.0.1:8000/blog/laravel-34">
                                    <div>
                                        <img class="w-full rounded-xl"
                                            src="http://127.0.0.1:8000/storage/3i5uKG05UnvhbORZ3ieDkvtAOL8ss5-metaZXAxNSAoMjIpLnBuZw==-.png">
                                    </div>
                                </a>
                                <div class="mt-3"><a href="http://127.0.0.1:8000/blog/laravel-34">
                                    </a>
                                    <div class="flex items-center mb-2"><a href="http://127.0.0.1:8000/blog/laravel-34">
                                        </a><a href="http://127.0.0.1:8000/categories/laravel" class="bg-red-600 
                                                text-white 
                                                rounded-xl px-3 py-1 text-sm mr-3">
                                            Laravel</a>
                                        <p class="text-gray-500 text-sm">2023-09-05</p>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900">Laravel 10 tutorial feed page #34</h3>
                                </div>
        
                            </div>
                            <div class="md:col-span-1 col-span-3">
                                <a href="http://127.0.0.1:8000/blog/fil3tutorial">
                                    <div>
                                        <img class="w-full rounded-xl"
                                            src="http://127.0.0.1:8000/storage/4sEsCDleYEXT4GC7AdU8BP7TBab3cx-metaZmlsYW1lbnQgY291cnNlICg0KS5wbmc=-.png">
                                    </div>
                                </a>
                                <div class="mt-3"><a href="http://127.0.0.1:8000/blog/fil3tutorial">
                                    </a>
                                    <div class="flex items-center mb-2"><a href="http://127.0.0.1:8000/blog/fil3tutorial">
                                        </a><a href="http://127.0.0.1:8000/categories/PHP" class="bg-blue-400 
                                                text-white 
                                                rounded-xl px-3 py-1 text-sm mr-3">
                                            PHP</a>
                                        <p class="text-gray-500 text-sm">2023-09-04</p>
                                    </div>
                                    <h3 class="text-xl font-bold text-gray-900">Filament 3 relationship manager tutorial</h3>
                                </div>
        
                            </div>
                            <div class="md:col-span-1 col-span-3">
                                <a
                                    href="http://127.0.0.1:8000/blog/in-exercitationem-quis-dolor-consequatur-eligendi-esse-rerum">
                                    <div>
                                        <img class="w-full rounded-xl"
                                            src="https://via.placeholder.com/640x480.png/0000ee?text=corrupti">
                                    </div>
                                    <div class="mt-3">
                                        <div class="flex items-center mb-2">
                                            <p class="text-gray-500 text-sm">2023-08-29</p>
                                        </div>
                                        <h3 class="text-xl font-bold text-gray-900">Mary Berge</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="md:col-span-1 col-span-3">
                                <a href="http://127.0.0.1:8000/blog/autem-nesciunt-architecto-doloribus-ut-id">
                                    <div>
                                        <img class="w-full rounded-xl"
                                            src="https://via.placeholder.com/640x480.png/00ee33?text=nihil">
                                    </div>
                                    <div class="mt-3">
                                        <div class="flex items-center mb-2">
                                            <p class="text-gray-500 text-sm">2023-08-29</p>
                                        </div>
                                        <h3 class="text-xl font-bold text-gray-900">Dr. Reina Yost</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="md:col-span-1 col-span-3">
                                <a href="http://127.0.0.1:8000/blog/voluptas-ipsam-ea-officia-nostrum">
                                    <div>
                                        <img class="w-full rounded-xl"
                                            src="https://via.placeholder.com/640x480.png/00cc33?text=in">
                                    </div>
                                    <div class="mt-3">
                                        <div class="flex items-center mb-2">
                                            <p class="text-gray-500 text-sm">2023-08-29</p>
                                        </div>
                                        <h3 class="text-xl font-bold text-gray-900">Carlie Hermann</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="md:col-span-1 col-span-3">
                                <a href="http://127.0.0.1:8000/blog/ea-officiis-tenetur-aut-voluptatem">
                                    <div>
                                        <img class="w-full rounded-xl"
                                            src="https://via.placeholder.com/640x480.png/00eeaa?text=repudiandae">
                                    </div>
                                    <div class="mt-3">
                                        <div class="flex items-center mb-2">
                                            <p class="text-gray-500 text-sm">2023-08-29</p>
                                        </div>
                                        <h3 class="text-xl font-bold text-gray-900">Tess Kub</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="md:col-span-1 col-span-3">
                                <a
                                    href="http://127.0.0.1:8000/blog/non-et-molestiae-repellat-omnis-amet-mollitia-necessitatibus">
                                    <div>
                                        <img class="w-full rounded-xl"
                                            src="https://via.placeholder.com/640x480.png/00bb77?text=et">
                                    </div>
                                    <div class="mt-3">
                                        <div class="flex items-center mb-2">
                                            <p class="text-gray-500 text-sm">2023-08-29</p>
                                        </div>
                                        <h3 class="text-xl font-bold text-gray-900">Lysanne Schmeler</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="md:col-span-1 col-span-3">
                                <a href="http://127.0.0.1:8000/blog/itaque-officiis-accusantium-quis-distinctio">
                                    <div>
                                        <img class="w-full rounded-xl"
                                            src="https://via.placeholder.com/640x480.png/00dd88?text=et">
                                    </div>
                                    <div class="mt-3">
                                        <div class="flex items-center mb-2">
                                            <p class="text-gray-500 text-sm">2023-08-29</p>
                                        </div>
                                        <h3 class="text-xl font-bold text-gray-900">Dr. Kiara Mohr</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="md:col-span-1 col-span-3">
                                <a href="http://127.0.0.1:8000/blog/sed-dolor-id-qui-distinctio-autem-repellat-voluptas">
                                    <div>
                                        <img class="w-full rounded-xl"
                                            src="https://via.placeholder.com/640x480.png/002288?text=aut">
                                    </div>
                                    <div class="mt-3">
                                        <div class="flex items-center mb-2">
                                            <p class="text-gray-500 text-sm">2023-08-29</p>
                                        </div>
                                        <h3 class="text-xl font-bold text-gray-900">Alfreda Hills</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="mt-10 block text-center text-lg text-yellow-500 font-semibold"
                        href="http://127.0.0.1:8000/blog">More
                        Posts</a>
                </div>
            </main>
        
            <footer class="text-sm space-x-4 flex items-center border-t border-gray-100 flex-wrap justify-center py-4 ">
                <a class="text-gray-500 hover:text-yellow-500" href="">About Us</a>
                <a class="text-gray-500 hover:text-yellow-500" href="">Help</a>
                <a class="text-gray-500 hover:text-yellow-500" href="">Login</a>
                <a class="text-gray-500 hover:text-yellow-500" href="">Explore</a>
            </footer>

        @stack('modals')
        @livewireScripts
    </body>
</html>
