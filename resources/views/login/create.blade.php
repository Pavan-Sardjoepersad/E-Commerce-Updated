@extends('components.layout')
@section('content')

    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a class="block text-teal-600 mb-4" href="/">
                <span class="sr-only">Pavan</span>
                    <svg class="h-8" viewBox="0 0 28 24" height="64px" width="64px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" 
                    xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 22.613 22.613" xml:space="preserve" 
                    fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" 
                    stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path style="fill:#030104;" 
                        d="M11.988,5.382c-1.969,0-3.559,1.815-3.559,4.057s1.59,4.058,3.559,4.058 c1.968,0,3.562-1.816,3.562-4.058S13.956,5.382,11.988,5.382z">
                    </path> <path style="fill:#030104;" d="M20.715,0.001H1.9c-1.05,0-1.9,0.85-1.9,1.898v18.815c0,1.051,0.85,1.898,1.9,1.898h18.814 c1.049,0,1.899-0.848,1.899-1.898V1.899C22.614,0.851,21.764,0.001,20.715,0.001z M11.988,14.839 c-1.459,0-2.761-0.757-3.621-1.946v5.627H7.063V4.273h1.304v1.828c0.86-1.188,2.162-1.946,3.621-1.946 c2.588,0,4.691,2.392,4.691,5.343C16.68,12.447,14.577,14.839,11.988,14.839z"></path> </g> </g> </g></svg>
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Log in to your account
                    </h1>
                    
                    <form class="space-y-4 md:space-y-6" action="/login" method="POST">
                        @csrf

                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="email" >
                                Email
                            </label>
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                                type="email" 
                                name="email" 
                                id="email" 
                                value="{{old('email')}}"
                                placeholder="example@email.com"
                                required
                            >

                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror

                        </div>


                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                for="password" >
                                Password
                            </label>
                            <input class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                type="password" 
                                name="password" 
                                id="password" 
                                value="{{old('password')}}"
                                placeholder="●●●●●●●"
                                required
                            >

                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror

                        </div>
                        
                     
                        
                        
                        {{-- <div class="flex items-start">
                            <div class="flex items-center h-5">
                            <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                            </div>
                            <div class="ml-3 text-sm">
                            <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                            </div>
                        </div> --}}
                        
                        <div class="mb-6">
                            <button type="submit" class="bg-black text-white rounded py-2 px-4 hover:bg-gray-500">
                                Log In
                            </button>
                        </div>

                        <p class="mt-4 text-sm font-light text-gray-500 dark:text-gray-400">
                            Back to <a href="/" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Home</a>
                        </p>
                        
                        
                    
                    </form>
                </div>
            </div>
        </div>
    </section>


@endsection