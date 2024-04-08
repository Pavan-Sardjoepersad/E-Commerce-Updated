<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce - Pavan</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.9.1/dist/cdn.min.js"></script>



</head>
<body>
    <header class="bg-gray-100">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">

                <div class="flex-1 flex content-center md:flex md:items-center md:gap-12" >
                    <a class="block text-teal-600" href="/">
                        <span class="sr-only">Home</span>
                            <svg class="h-8" viewBox="0 0 28 24" height="64px" width="64px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" 
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 22.613 22.613" xml:space="preserve" 
                            fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" 
                            stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path style="fill:#030104;" 
                                d="M11.988,5.382c-1.969,0-3.559,1.815-3.559,4.057s1.59,4.058,3.559,4.058 c1.968,0,3.562-1.816,3.562-4.058S13.956,5.382,11.988,5.382z">
                            </path> <path style="fill:#030104;" d="M20.715,0.001H1.9c-1.05,0-1.9,0.85-1.9,1.898v18.815c0,1.051,0.85,1.898,1.9,1.898h18.814 c1.049,0,1.899-0.848,1.899-1.898V1.899C22.614,0.851,21.764,0.001,20.715,0.001z M11.988,14.839 c-1.459,0-2.761-0.757-3.621-1.946v5.627H7.063V4.273h1.304v1.828c0.86-1.188,2.162-1.946,3.621-1.946 c2.588,0,4.691,2.392,4.691,5.343C16.68,12.447,14.577,14.839,11.988,14.839z"></path> </g> </g> </g></svg>
                    </a>

                    <!-- Hamburger Menu -->
                    <div x-data="{ open: false }" class="absolute right-0 top-0 mt-2">
                        <button @click="open = !open" class="text-black focus:outline-none p-2 md:hidden">
                            
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6">
                                <path d="M4 6h16M4 12h16m-7 6h7"></path>
                            </svg>
                            @if (session('cart') && count(session('cart')) > 0 )
                                <span class="absolute h-3 w-3 rounded-full bg-red-500  top-0 right-1" /> 
                            @endif
                            
                        </button>

                        <div x-show="open" @click.away="open = false" class="flex fixed inset-0 z-50 bg-black bg-opacity-50 transition-opacity">
                            
                            

                            <div class="fixed inset-y-0 right-0 z-50  bg-gray-800 transform overflow-y-auto transition-transform">
                                <div class="min-h-screen flex flex-row bg-gray-100">
                                    <div class="flex flex-col w-56 bg-white rounded-r-3xl overflow-hidden">
                                        <div class="flex items-center justify-start h-20 shadow-md">
                                            <span class="sr-only">Home</span>
                                            <svg class="h-8 justify-start mb-4" viewBox="0 0 28 24" height="64px" width="64px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" 
                                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 22.613 22.613" xml:space="preserve" 
                                            fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" 
                                            stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path style="fill:#030104;" 
                                                d="M11.988,5.382c-1.969,0-3.559,1.815-3.559,4.057s1.59,4.058,3.559,4.058 c1.968,0,3.562-1.816,3.562-4.058S13.956,5.382,11.988,5.382z">
                                            </path> <path style="fill:#030104;" d="M20.715,0.001H1.9c-1.05,0-1.9,0.85-1.9,1.898v18.815c0,1.051,0.85,1.898,1.9,1.898h18.814 c1.049,0,1.899-0.848,1.899-1.898V1.899C22.614,0.851,21.764,0.001,20.715,0.001z M11.988,14.839 c-1.459,0-2.761-0.757-3.621-1.946v5.627H7.063V4.273h1.304v1.828c0.86-1.188,2.162-1.946,3.621-1.946 c2.588,0,4.691,2.392,4.691,5.343C16.68,12.447,14.577,14.839,11.988,14.839z"></path> </g> </g> </g></svg>
                                            
                                            <button @click="open = false" class="absolute top-0 right-0 m-4 text-black focus:outline-none">
                                                
                                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6">
                                                    <path d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </div>
                                        <ul class="flex flex-col py-4">
                                        @auth
                                            <li>
                                              <span class="text-sm flex ml-4 mb-4 font-medium">Hi, {{auth()->user()->name}}</span>
                                            </li>

                                            <li>
                                                <a href="/cart" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                                                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-cart"></i></span>
                                                <span class="text-sm font-medium">Cart</span>
                                                <span class=" ml-4 mr-6 text-sm bg-red-100 rounded-full px-3 py-px text-red-500">
                                                    {{ array_sum(array_column(session('cart', []), 'quantity')) }}
                                                </span>
                                                </a>
                                            </li>
                                            
                                            <form action="/logout" method="POST" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                                                @csrf
                                                <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-log-out"></i></span>

                                                <button class="inline-block mr-4 text-sm font-medium text-red-500"
                                                    type="submit" 
                                                    href="/logout">Log Out
                                                </button>
                                            </form>

                                        @else
                                        <li>
                                            <a href="/register" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-edit"></i></span>
                                            <span class="text-sm font-medium">Register</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/login" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-log-in"></i></span>
                                            <span class="text-sm font-medium">Login</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/cart" class="flex flex-row items-center h-12 transform hover:translate-x-2 transition-transform ease-in duration-200 text-gray-500 hover:text-gray-800">
                                            <span class="inline-flex items-center justify-center h-12 w-12 text-lg text-gray-400"><i class="bx bx-cart"></i></span>
                                            <span class="text-sm font-medium">Cart</span>
                                            <span class=" ml-4 mr-6 text-sm bg-red-100 rounded-full px-3 py-px text-red-500">
                                                {{ array_sum(array_column(session('cart', []), 'quantity')) }}
                                            </span>
                                            </a>
                                        </li>

                                        @endauth
                                        </ul>
                                        
                                        

                                    </div>
                                    </div>
                
                            </div>
                        </div>
                    </div>
                    {{-- End of Hamburger Menu --}}

                </div>

                {{-- Non mobile menu --}}
                <div class="md:flex md:items-center md:gap-12">
                    <nav aria-label="Global" class="hidden md:block">
                        <ul class="flex items-center gap-6 text-sm">
                            <li>
                                <a class="text-gray-500 transition hover:text-blue-500" href="{{ route('about') }}"> About
                                </a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:text-blue-500" href="{{ route('stores') }}"> Stores
                                </a>
                            </li>

                            <li>
                                <a class="text-gray-500 transition hover:text-blue-500" href="{{ route('contact') }}">Contact
                                </a>
                            </li>
                        </ul>
                    </nav>

                    @auth
                        <div class="hidden md:flex flex items-center gap-4">
                            <div class="sm:flex sm:gap-4">
                                <span class="inline-block rounded border border-gray-200 bg-gray-200 px-10 py-2 text-sm font-medium text-black"
                                    >
                                    Welcome, {{auth()->user()->name}}
                                </span>
                                
                                <a href="{{  route('addProduct') }}" class="transition hover:bg-gray-600 inline-block rounded border border-gray-200 bg-black px-10 py-2 text-sm font-medium text-white"
                                    >
                                    Add New Product
                                </a>

                                <form action="/logout" method="POST">
                                    @csrf
                                    <button class="inline-block px-10 py-2 text-sm font-medium text-blue-500"
                                        type="submit" 
                                        href="/logout">Log Out
                                    </button>
                                </form>
                                
                            </div>
                        </div>

                        <x-shopping-cart />

                    @else
                        <div class="hidden  md:flex md:items-center">
                            <div class="sm:flex sm:gap-4">
                                <a class="inline-block rounded border border-gray-900 bg-gray-900 px-10 py-2 text-sm font-medium text-white hover:bg-transparent hover:text-gray-900 focus:outline-none focus:ring active:text-gray-900"
                                    href="/login">
                                    Login
                                </a>
                                 
                                <div class="hidden md:flex">
                                    <a class="inline-block rounded border border-gray-900 px-10 py-2 text-sm font-medium text-gray-900 hover:bg-gray-900 hover:text-white focus:outline-none focus:ring active:bg-gray-900"
                                        href="/register">
                                        Register
                                    </a>
                                </div>
                            </div>

                            <!-- Shopping Cart Icon -->
                            <div class="ml-12 hidden md:flex ">
                                <a href="/cart">
                                            <div class="relative py-2 right-4">
                                                <div class="t-0 absolute left-3">
                                                    <p 
                                                        class="flex h-2 w-2 items-center justify-center rounded-full bg-red-500 p-3 text-xs text-white">
                                                        {{ array_sum(array_column(session('cart', []), 'quantity')) }}
                                                    </p>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="file: mt-4 h-6 w-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                                </svg>
                                            </div>
                                </a>
                            </div>    
                            

                        </div>
                    @endauth
                 
                        
                   

                </div>
            </div>
        </div>
    </header>
    {{-- Here, the content will be rendered --}}
    @yield('content')
    {{-- {{$slot}} --}}

</body>
</html>