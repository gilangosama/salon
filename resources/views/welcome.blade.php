<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        <!-- Navbar -->
        <nav x-data="{ open: false }" class="fixed top-0 left-0 right-0 bg-white border-b border-gray-100 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="/">
                                <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                            </a>
                        </div>

                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <a href="#home" class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out">
                                Home
                            </a>
                            <a href="#about" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                About
                            </a>
                            <a href="#gallery" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                Galeri
                            </a>
                            <a href="#booking" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                Booking
                            </a>
                        </div>
                    </div>

                    <!-- Login/Register Links -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        @if (Route::has('login'))
                            <div class="px-6 py-4">
                                @auth
                                    <div class="flex items-center">
                                        <span class="text-sm text-gray-700 mr-4">{{ Auth::user()->name }}</span>
                                        <a href="{{ route('profile.edit') }}" class="text-sm text-gray-700 dark:text-gray-500 underline mr-4">Profile</a>
                                        <form method="POST" action="{{ route('logout') }}" class="inline">
                                            @csrf
                                            <button type="submit" class="text-sm text-gray-700 dark:text-gray-500 underline">
                                                Logout
                                            </button>
                                        </form>
                                    </div>
                                @else
                                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>

                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                <div class="pt-2 pb-3 space-y-1">
                    <a href="/" class="block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out">
                        Home
                    </a>
                    <a href="/about" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                        About
                    </a>
                    <a href="/promo" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                        Harga & Promo
                    </a>
                    <a href="/booking" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out">
                        Booking
                    </a>
                </div>

                @auth
                <div class="pt-4 pb-1 border-t border-gray-200">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                    </div>

                    <div class="mt-3 space-y-1">
                        <a href="{{ route('profile.edit') }}" class="block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600">
                            Profile
                        </a>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block w-full text-left pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600">
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
                @endauth
            </div>
        </nav>

        <!-- Spacer untuk fixed navbar -->
        <div class="h-16"></div>

        <!-- Carousel -->
        <div id="home" x-data="{ activeSlide: 0 }" class="relative w-full">
            <!-- Slides -->
            <div class="relative h-[500px] overflow-hidden">
                <!-- Slide 1 -->
                <div x-show="activeSlide === 0" 
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform translate-x-full"
                     x-transition:enter-end="opacity-100 transform translate-x-0"
                     x-transition:leave="transition ease-out duration-300"
                     x-transition:leave-start="opacity-100 transform translate-x-0"
                     x-transition:leave-end="opacity-0 transform -translate-x-full"
                     class="absolute inset-0">
                    <img src="{{ asset('img/car1.jpg') }}" class="w-full h-full object-cover" alt="Slide 1">
                    <div class="absolute inset-0 bg-black bg-opacity-40">
                        <div class="flex h-full items-center justify-center">
                            <div class="text-center text-white">
                                <h2 class="text-4xl font-bold mb-4">Selamat Datang</h2>
                                <p class="text-xl">Temukan Pengalaman Terbaik</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div x-show="activeSlide === 1"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform translate-x-full"
                     x-transition:enter-end="opacity-100 transform translate-x-0"
                     x-transition:leave="transition ease-out duration-300"
                     x-transition:leave-start="opacity-100 transform translate-x-0"
                     x-transition:leave-end="opacity-0 transform -translate-x-full"
                     class="absolute inset-0">
                    <img src="{{ asset('img/car2.jpg') }}" class="w-full h-full object-cover" alt="Slide 2">
                    <div class="absolute inset-0 bg-black bg-opacity-40">
                        <div class="flex h-full items-center justify-center">
                            <div class="text-center text-white">
                                <h2 class="text-4xl font-bold mb-4">Promo Spesial</h2>
                                <p class="text-xl">Dapatkan Penawaran Terbaik</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div x-show="activeSlide === 2"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform translate-x-full"
                     x-transition:enter-end="opacity-100 transform translate-x-0"
                     x-transition:leave="transition ease-out duration-300"
                     x-transition:leave-start="opacity-100 transform translate-x-0"
                     x-transition:leave-end="opacity-0 transform -translate-x-full"
                     class="absolute inset-0">
                    <img src="{{ asset('img/car3.jpg') }}" class="w-full h-full object-cover" alt="Slide 3">
                    <div class="absolute inset-0 bg-black bg-opacity-40">
                        <div class="flex h-full items-center justify-center">
                            <div class="text-center text-white">
                                <h2 class="text-4xl font-bold mb-4">Booking Sekarang</h2>
                                <p class="text-xl">Mudah dan Cepat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <button @click="activeSlide = activeSlide === 0 ? 2 : activeSlide - 1" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-r-lg hover:bg-opacity-75">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button @click="activeSlide = activeSlide === 2 ? 0 : activeSlide + 1" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-black bg-opacity-50 text-white p-3 rounded-l-lg hover:bg-opacity-75">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <!-- Indicators -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button @click="activeSlide = 0" :class="{'bg-white': activeSlide === 0, 'bg-gray-400': activeSlide !== 0}" class="w-3 h-3 rounded-full transition-colors duration-300"></button>
                <button @click="activeSlide = 1" :class="{'bg-white': activeSlide === 1, 'bg-gray-400': activeSlide !== 1}" class="w-3 h-3 rounded-full transition-colors duration-300"></button>
                <button @click="activeSlide = 2" :class="{'bg-white': activeSlide === 2, 'bg-gray-400': activeSlide !== 2}" class="w-3 h-3 rounded-full transition-colors duration-300"></button>
            </div>
        </div>

        {{-- About Section --}}
        <section id="about" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Tentang Kami</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Salon Kecantikan Profesional
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        Kami menyediakan berbagai layanan perawatan kecantikan dengan tenaga ahli profesional untuk membantu Anda tampil cantik dan percaya diri.
                    </p>
                </div>

                <div class="mt-20">
                    <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                        <!-- Card 1 -->
                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                        <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.5v15m7.5-7.5h-15"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Tenaga Ahli Berpengalaman</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Tim kami terdiri dari para profesional yang berpengalaman dan terlatih dalam memberikan perawatan kecantikan terbaik.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                        <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Produk Berkualitas</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Menggunakan produk-produk kecantikan terbaik dan terpercaya untuk hasil perawatan yang maksimal.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="pt-6">
                            <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                                <div class="-mt-6">
                                    <div>
                                        <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </span>
                                    </div>
                                    <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Layanan Lengkap</h3>
                                    <p class="mt-5 text-base text-gray-500">
                                        Menyediakan berbagai layanan perawatan dari ujung rambut hingga ujung kaki untuk memenuhi kebutuhan kecantikan Anda.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Company Stats -->
                <div class="mt-20">
                    <div class="grid grid-cols-2 gap-8 md:grid-cols-4">
                        <div class="text-center">
                            <span class="text-4xl font-extrabold text-indigo-600">10+</span>
                            <p class="mt-2 text-lg font-medium text-gray-500">Tenaga Ahli</p>
                        </div>
                        <div class="text-center">
                            <span class="text-4xl font-extrabold text-indigo-600">5000+</span>
                            <p class="mt-2 text-lg font-medium text-gray-500">Pelanggan Puas</p>
                        </div>
                        <div class="text-center">
                            <span class="text-4xl font-extrabold text-indigo-600">15+</span>
                            <p class="mt-2 text-lg font-medium text-gray-500">Jenis Layanan</p>
                        </div>
                        <div class="text-center">
                            <span class="text-4xl font-extrabold text-indigo-600">8+</span>
                            <p class="mt-2 text-lg font-medium text-gray-500">Tahun Pengalaman</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Galeri Section --}}
        <section id="gallery" class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Galeri Kami</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Hasil Karya Terbaik Kami
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        Lihat berbagai hasil perawatan dan suasana salon kami
                    </p>
                </div>

                <div class="mt-12 grid gap-5 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Gallery Item 1 -->
                    <div class="group relative rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('img/rambut.jpg') }}" alt="Hasil Hair Styling" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-white text-lg font-semibold">Hair Styling</h3>
                                <p class="text-gray-200 text-sm">Transformasi rambut oleh stylist profesional</p>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item 2 -->
                    <div class="group relative rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('img/facial.jpg') }}" alt="Facial Treatment" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-white text-lg font-semibold">Facial Treatment</h3>
                                <p class="text-gray-200 text-sm">Perawatan wajah dengan produk premium</p>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item 3 -->
                    <div class="group relative rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('img/nail.jpg') }}" alt="Nail Art" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-white text-lg font-semibold">Nail Art</h3>
                                <p class="text-gray-200 text-sm">Kreasi nail art yang unik dan cantik</p>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item 4 -->
                    <div class="group relative rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('img/makeup.jpg') }}" alt="Make Up" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-white text-lg font-semibold">Make Up</h3>
                                <p class="text-gray-200 text-sm">Make up untuk berbagai acara spesial</p>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item 5 -->
                    <div class="group relative rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('img/salon.jpg') }}" alt="Salon Interior" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-white text-lg font-semibold">Salon Interior</h3>
                                <p class="text-gray-200 text-sm">Suasana nyaman salon kami</p>
                            </div>
                        </div>
                    </div>

                    <!-- Gallery Item 6 -->
                    <div class="group relative rounded-lg overflow-hidden shadow-lg">
                        <img src="{{ asset('img/beauty-spa.jpg') }}" alt="Body Treatment" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent">
                            <div class="absolute bottom-0 left-0 right-0 p-4">
                                <h3 class="text-white text-lg font-semibold">Body Treatment</h3>
                                <p class="text-gray-200 text-sm">Perawatan tubuh yang menenangkan</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lihat Semua Button -->
                {{-- <div class="mt-12 text-center">
                    <a href="/gallery" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 transition duration-150 ease-in-out">
                        Lihat Semua Galeri
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div> --}}
            </div>
        </section>

        {{-- Harga & Promo Section --}}
        {{-- <section class="py-16 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Spesial Untuk Anda</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Harga & Promo Menarik
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        Dapatkan penawaran spesial untuk berbagai layanan kecantikan kami
                    </p>
                </div>

                <div class="mt-12 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    <!-- Promo Card 1 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('img/rambut.jpg') }}" alt="Promo 1" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex justify-between items-center">
                                <h3 class="text-xl font-bold text-gray-900">Paket Perawatan Rambut</h3>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-0.5 rounded">Hemat 25%</span>
                            </div>
                            <div class="mt-4">
                                <span class="text-gray-400 line-through">Rp 500.000</span>
                                <p class="text-2xl font-bold text-indigo-600">Rp 375.000</p>
                            </div>
                            <p class="mt-3 text-gray-500">Creambath, hair mask, dan blow styling</p>
                        </div>
                    </div>

                    <!-- Promo Card 2 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('img/facial.jpg') }}" alt="Promo 2" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex justify-between items-center">
                                <h3 class="text-xl font-bold text-gray-900">Facial Treatment</h3>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-0.5 rounded">Hemat 30%</span>
                            </div>
                            <div class="mt-4">
                                <span class="text-gray-400 line-through">Rp 450.000</span>
                                <p class="text-2xl font-bold text-indigo-600">Rp 315.000</p>
                            </div>
                            <p class="mt-3 text-gray-500">Deep cleaning, masker, dan serum vitamin</p>
                        </div>
                    </div>

                    <!-- Promo Card 3 -->
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('img/beauty-spa.jpg') }}" alt="Promo 3" class="w-full h-48 object-cover">
                        <div class="p-6">
                            <div class="flex justify-between items-center">
                                <h3 class="text-xl font-bold text-gray-900">Paket Body Spa</h3>
                                <span class="bg-indigo-100 text-indigo-800 text-xs font-semibold px-2.5 py-0.5 rounded">Hemat 20%</span>
                            </div>
                            <div class="mt-4">
                                <span class="text-gray-400 line-through">Rp 600.000</span>
                                <p class="text-2xl font-bold text-indigo-600">Rp 480.000</p>
                            </div>
                            <p class="mt-3 text-gray-500">Body massage, lulur, dan aromatherapy</p>
                        </div>
                    </div>
                </div>

                <!-- Lihat Semua Button -->
                <div class="mt-12 text-center">
                    <a href="/promo" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 transition duration-150 ease-in-out">
                        Lihat Semua Promo
                        <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div> --}}

                {{-- <!-- Highlight Info -->
                <div class="mt-16 grid gap-6 lg:grid-cols-2">
                    <div class="bg-indigo-50 rounded-lg p-6">
                        <div class="flex items-center">
                            <svg class="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <h4 class="ml-3 text-lg font-medium text-gray-900">Promo Terbatas</h4>
                        </div>
                        <p class="mt-4 text-gray-500">Segera manfaatkan penawaran spesial kami sebelum periode promo berakhir.</p>
                    </div>

                    <div class="bg-indigo-50 rounded-lg p-6">
                        <div class="flex items-center">
                            <svg class="h-6 w-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
                            </svg>
                            <h4 class="ml-3 text-lg font-medium text-gray-900">Pembayaran Mudah</h4>
                        </div>
                        <p class="mt-4 text-gray-500">Tersedia berbagai metode pembayaran untuk kemudahan transaksi Anda.</p>
                    </div>
                </div>
            </div> --}}
        {{-- </section> --}}

        {{-- Booking Section --}}
        <section id="booking" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center mb-12">
                    <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Booking Sekarang</h2>
                    <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                        Jadwalkan Perawatan Anda
                    </p>
                    <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                        Nikmati pengalaman perawatan kecantikan terbaik dengan reservasi mudah dan cepat
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <!-- Left Side: Benefits -->
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Reservasi Online 24/7</h3>
                                <p class="mt-2 text-base text-gray-500">
                                    Lakukan booking kapan saja dan dimana saja melalui platform online kami
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Konfirmasi Instan</h3>
                                <p class="mt-2 text-base text-gray-500">
                                    Dapatkan konfirmasi booking secara instan melalui email atau WhatsApp
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-lg font-medium text-gray-900">Pengingat Otomatis</h3>
                                <p class="mt-2 text-base text-gray-500">
                                    Terima pengingat jadwal perawatan Anda melalui notifikasi
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Right Side: CTA Card -->
                    <div class="bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl p-8 text-white shadow-xl">
                        <div class="text-center">
                            <h3 class="text-2xl font-bold mb-4">Siap untuk tampil cantik?</h3>
                            <p class="mb-6 text-indigo-100">
                                Booking sekarang dan dapatkan pengalaman perawatan kecantikan terbaik dari para ahli kami
                            </p>
                            <a href="/booking" class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 transition duration-150 ease-in-out">
                                Booking Sekarang
                                <svg class="ml-2 -mr-1 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </a>
                        </div>

                        <!-- Additional Info -->
                        <div class="mt-8 grid grid-cols-2 gap-4 text-center">
                            <div class="p-4 bg-white bg-opacity-10 rounded-lg">
                                <p class="text-sm text-indigo-100">Buka Setiap Hari</p>
                                <p class="font-semibold">09:00 - 21:00</p>
                            </div>
                            <div class="p-4 bg-white bg-opacity-10 rounded-lg">
                                <p class="text-sm text-indigo-100">Customer Service</p>
                                <p class="font-semibold">24/7 Online</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Bottom Testimonial -->
                {{-- <div class="mt-16 text-center">
                    <div class="inline-flex items-center space-x-4">
                        <img class="h-12 w-12 rounded-full" src="{{ asset('img/testimonial.jpg') }}" alt="Customer">
                        <div class="text-left">
                            <p class="text-gray-900 font-medium">"Pelayanan sangat memuaskan dan booking sangat mudah!"</p>
                            <p class="text-gray-500">Sarah - Customer</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>

        {{-- Footer Section --}}
        <footer class="bg-gray-900 text-white">
            <!-- Main Footer -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Beauty Salon</h3>
                        <p class="text-gray-400 mb-4">Memberikan pelayanan kecantikan terbaik untuk kepuasan pelanggan kami.</p>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white">
                                <span class="sr-only">Facebook</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white">
                                <span class="sr-only">Instagram</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white">
                                <span class="sr-only">WhatsApp</span>
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.124-.124-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                        <ul class="space-y-2">
                            <li><a href="/" class="text-gray-400 hover:text-white">Home</a></li>
                            <li><a href="/about" class="text-gray-400 hover:text-white">About</a></li>
                            <li><a href="/promo" class="text-gray-400 hover:text-white">Harga & Promo</a></li>
                            <li><a href="/booking" class="text-gray-400 hover:text-white">Booking</a></li>
                        </ul>
                    </div>

                    <!-- Services -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Layanan Kami</h3>
                        <ul class="space-y-2">
                            <li class="text-gray-400">Perawatan Rambut</li>
                            <li class="text-gray-400">Facial Treatment</li>
                            <li class="text-gray-400">Body Treatment</li>
                            <li class="text-gray-400">Nail Art & Care</li>
                            <li class="text-gray-400">Make Up</li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div>
                        <h3 class="text-lg font-semibold mb-4">Hubungi Kami</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start space-x-3">
                                <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="text-gray-400">Jl. Contoh No. 123, Kota, Indonesia</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <span class="text-gray-400">+62 123 4567 890</span>
                            </li>
                            <li class="flex items-center space-x-3">
                                <svg class="h-6 w-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span class="text-gray-400">info@beautysalon.com</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="border-t border-gray-800">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                    <div class="md:flex md:items-center md:justify-between">
                        <div class="text-sm text-gray-400">
                            © 2024 Beauty Salon. All rights reserved.
                        </div>
                        <div class="mt-4 md:mt-0">
                            <div class="flex space-x-6 text-sm text-gray-400">
                                <a href="#" class="hover:text-white">Privacy Policy</a>
                                <a href="#" class="hover:text-white">Terms of Service</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Auto Slide Script -->
        <script>
            document.addEventListener('alpine:init', () => {
                let interval = setInterval(() => {
                    let activeSlide = Alpine.store('activeSlide');
                    Alpine.store('activeSlide', activeSlide === 2 ? 0 : activeSlide + 1);
                }, 5000); // Ganti slide setiap 5 detik
            });
        </script>

        <script>
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        // Offset untuk navbar fixed
                        const offset = 80; // Sesuaikan dengan tinggi navbar Anda
                        const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - offset;
                        
                        window.scrollTo({
                            top: targetPosition,
                            behavior: 'smooth'
                        });
                    }
                });
            });

            // Menambahkan active state pada menu saat scroll
            window.addEventListener('scroll', function() {
                const sections = document.querySelectorAll('section');
                const navLinks = document.querySelectorAll('.sm\\:flex a');
                
                let current = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (pageYOffset >= sectionTop - 150) {
                        current = section.getAttribute('id');
                    }
                });

                navLinks.forEach(link => {
                    link.classList.remove('border-indigo-400', 'text-gray-900');
                    link.classList.add('border-transparent', 'text-gray-500');
                    if (link.getAttribute('href').substring(1) === current) {
                        link.classList.remove('border-transparent', 'text-gray-500');
                        link.classList.add('border-indigo-400', 'text-gray-900');
                    }
                });
            });
        </script>
    </body>
</html>
