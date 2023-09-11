@props(['title', 'profile'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }} | {{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('img/rontech.png') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="antialiased">
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50 ">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="/" class="-m-1.5 p-1.5">
                        <span class="sr-only">Ronil Cajan</span>
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700"
                        id="showButton">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="/"
                        class="text-sm font-semibold leading-6 text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Home</a>
                    <a href="#work"
                        class="text-sm font-semibold leading-6 text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Work</a>
                    <a href="#services"
                        class="text-sm font-semibold leading-6 text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Services</a>
                    <a href="#education"
                        class="text-sm font-semibold leading-6 text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Education</a>
                    <a href="#projects"
                        class="text-sm font-semibold leading-6 text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Projects</a>
                    <a href="#contact"
                        class="text-sm font-semibold leading-6 text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Contact</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="text-sm font-semibold leading-6 text-gray-900">Dashboard <span
                                    aria-hidden="true">&rarr;</span></a>
                        @else
                            <a href="{{ url('/login') }}" class="text-sm font-semibold leading-6 text-gray-900">Log in <span
                                    aria-hidden="true">&rarr;</span></a>
                        @endauth
                    @endif

                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="hidden" id="mobileMenu" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="/" class="-m-1.5 p-1.5">
                            <span class="sr-only">Ronil Cajan</span>
                            <img class="h-8 w-auto" src="{{ asset('img/rontech.png') }}" alt="">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" id="hideButton">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="#home"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 hideButton">Home</a>
                                <a href="#work"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 hideButton">Work</a>
                                <a href="#services"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 hideButton">Services</a>
                                <a href="#education"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 hideButton">Education</a>
                                <a href="#projects"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 hideButton">Projects</a>
                                <a href="#contact"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 hideButton">Contact</a>
                            </div>
                            <div class="py-6">
                                @if (Route::has('login'))
                                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                        @auth
                                            <a href="{{ url('/dashboard') }}"
                                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Dashboard</a>
                                        @else
                                            <a href="{{ url('/login') }}"
                                                class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Log
                                                in</a>
                                        @endauth
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="relative isolate px-6 pt-14 lg:px-8">
            {{ $slot }}
        </div>


        <footer class="w-full border-t-2 bg-slate-50 text-center p-10 mt-20">
            <p>Copyright © 2023. All rights reserved. {{ $profile->name }} Portfolio - PHP Web Developer</p>
            <div class="flex items-center justify-center gap-x-6 mt-2">
                <a href="https://github.com/ronilcajan"><img class="w-5" src="{{ asset('img/github.png') }}"
                        alt=""></a>
                <a href="https://www.linkedin.com/in/roncajan"><img class="w-5"
                        src="{{ asset('img/linkedin.png') }}" alt=""></a>
                <a href="https://twitter.com/RonCajan"><img class="w-5" src="{{ asset('img/twitter.png') }}"
                        alt=""></a>
                <a href="https://join.skype.com/invite/VdA7xJErWhiW"><img class="w-5"
                        src="{{ asset('img/skype.png') }}" alt=""></a>
                <a href="mailto:{{ $profile->email }}"><img class="w-5" src="{{ asset('img/gmail.png') }}"
                        alt=""></a>

            </div>
        </footer>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
    </div>
    @livewireScripts
    <script>
        const mobileMenu = document.getElementById('mobileMenu');
        const toggleMobileMenu = () => {
            mobileMenu.style.display = mobileMenu.style.display === 'block' ? 'none' : 'block';
        };

        const showButton = document.getElementById('showButton');
        showButton.addEventListener('click', toggleMobileMenu);

        const closeButton = document.getElementById('hideButton');
        closeButton.addEventListener('click', toggleMobileMenu);

        const closeButtonNavElements = document.querySelectorAll('.hideButton');
        for (const closeButtonNav of closeButtonNavElements) {
            closeButtonNav.addEventListener('click', toggleMobileMenu);
        }
    </script>
</body>

</html>
