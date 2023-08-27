<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="bg-white">
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
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
                    <a href="#home"
                        class="text-sm font-semibold leading-6 text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Home</a>
                    <a href="#work"
                        class="text-sm font-semibold leading-6 text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Work</a>
                    <a href="#education"
                        class="text-sm font-semibold leading-6 text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Education</a>
                    <a href="#"
                        class="text-sm font-semibold leading-6 text-gray-900 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">Projects</a>
                    <a href="#"
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
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Your Company</span>
                            <img class="h-8 w-auto"
                                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
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
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Home</a>
                                <a href="#work"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Work</a>
                                <a href="#education"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Education</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Projects</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Contact</a>
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

            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-2xl sm:py-48 md:py-38 lg:py-32 mt-10" id="home">
                <div class="text-center">
                    <div class="text-center mb-4">
                        <img class="mx-auto rounded-full" src="{{ asset('img/profile.jpg') }}" width="200"
                            alt="photo">
                    </div>
                    <p class="text-lg leading-8 text-gray-600">HELLO!</p>
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">I AM RONIL CAJAN
                    </h1>
                    <p class="text-lg leading-8 text-gray-600">A PHP DEVELOPER</p>
                    <p class="mt-6 text-lg leading-8 text-gray-600">Anim aute id magna aliqua ad ad non deserunt
                        sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat
                        aliqua.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <img class="w-10" src="{{ asset('img/logomark.min.svg') }}" alt="">
                        <img class="w-10" src="{{ asset('img/codeigniter.png') }}" alt="">
                        <img class="w-12" src="{{ asset('img/php.png') }}" alt="">
                    </div>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#"
                            class="px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300">Download
                            CV</a>
                        <a href="#projects" class="text-sm font-semibold leading-6 text-gray-900">See my works <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div>


            <div class="mx-auto max-w-2xl sm:py-30 mt-20 mb-20 md:py-20 lg:py-10 bg-indigo-600 p-6 text-white">
                <h3 class="sm:text-4xl md:text-4xl lg:text-5xl">I am happy to know you
                    that 20+ projects done sucessfully!</h3>
            </div>

            {{-- experiences --}}
            <div class="mx-auto max-w-2xl sm:py-48 md:py-38 lg:py-20">
                <p>Work Experience</p>
                <h1
                    class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                    Check My Expereince</h1>

                <ol class="relative border-l border-gray-200 dark:border-gray-700 mt-10">
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">September
                            2020 - Present</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Special Science Teacher
                            I</h3>
                        <h4 class="text-md font-semibold text-gray-900 dark:text-white">Department of Education
                        </h4>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">I serve as a
                            dedicated
                            teacher in a secondary school, specializing in the instruction of ICT to students
                            from Grade
                            7 to Grade 10. Beyond teaching, I also hold the role of the school's ICT
                            coordinator,
                            overseeing the management and security of vital school data. In my dual capacity as
                            an
                            educator and ICT
                            coordinator, I contribute to the empowerment of students while ensuring the
                            integrity of the
                            school's digital information flow.</p>
                    </li>
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Aug
                            2020 -
                            May 2021 (9 months)</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Web Developer</h3>
                        <h4 class="text-md font-semibold text-gray-900 dark:text-white">Digs Design, Inc</h4>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Collaborating with
                            development team for
                            solving web development challenges.
                            Self-directed research and development into
                            implementation of custom plugin and theme
                            coding.
                            Consistent and reliable communication with
                            team and project managers for providing time
                            estimates, project archetyping, and project
                            scoping.</p>
                    </li>
                    <li class="ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">May
                            2019
                            to July 2019 (3 months)</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Digital Marketing
                            Intern</h3>
                        <h4 class="text-md font-semibold text-gray-900 dark:text-white">Syntactics, Inc</h4>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Convey the right
                            business
                            message and reach
                            target audience with personalized marketing
                            strategies by the digital marketing team.
                        </p>
                    </li>
                </ol>

            </div>
            <div class="inline-flex items-center justify-center w-full my-10 mt-10">
                <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
                <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                    <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                        <path
                            d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                    </svg>
                </div>
            </div>

            {{-- Services --}}
            <div class="mx-auto max-w-2xl sm:py-48 md:py-38 lg:py-20" id="services">
                <p>Services</p>
                <h1
                    class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                    What I Do</h1>


                <div class="flex flex-wrap">
                    <div class="lg:w-1/3 md:w-1/2 sm:w-full p-1">
                        <div
                            class="bg-white px-10 py-12 border items-center text-center hover:shadow-lg hover:bg-indigo-100 border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                            <img class="mx-auto" width="60" src="{{ asset('img/s1.png') }}" alt="">

                            <h4 class="my-4 text-md font-bold">Web Development</h4>
                            <p>fsdfds fsdf sdfdsfds fsdf sdfsd fdsfds</p>
                        </div>
                    </div>
                    <div class="lg:w-1/3 md:w-1/2 sm:w-full p-1">
                        <div
                            class="bg-white px-10 py-12 border items-center text-center  border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                            <img class="mx-auto" src="{{ asset('img/s1.png') }}" alt="">

                            <h4 class="my-4 text-md text-gray-950 font-bold">Web Development</h4>
                            <p>fsdfds fsdf sdfdsfds fsdf sdfsd fdsfds</p>
                        </div>
                    </div>
                    <div class="lg:w-1/3 md:w-1/2 sm:w-full p-1">
                        <div
                            class="bg-white px-10 py-12 border items-center text-center  border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                            <img class="mx-auto" src="{{ asset('img/s1.png') }}" alt="">

                            <h4 class="my-4 text-md text-gray-950 font-bold">Web Development</h4>
                            <p>fsdfds fsdf sdfdsfds fsdf sdfsd fdsfds</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="inline-flex items-center justify-center w-full my-10 mt-10">
                <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
                <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                    <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                        <path
                            d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                    </svg>
                </div>
            </div>

            {{-- education --}}
            <div class="mx-auto max-w-2xl sm:py-48 md:py-38 lg:py-20" id="education">
                <p>Education</p>
                <h1
                    class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                    Check My Education</h1>

                <ol class="relative border-l border-gray-200 dark:border-gray-700 mt-10">
                    <li class="mb-10 ml-4">
                        <div
                            class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                        </div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">September
                            2020</time>
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Bachelor
                            of
                            Science in Information Technology</h3>
                        <h4 class="text-md font-semibold text-gray-900 dark:text-white">University of Science
                            and
                            Technology of Southern Philippines -
                            Oroqueita</h4>
                        <ul class="list-disc text-gray-500 dark:text-gray-400 ml-6 mt-2">
                            <li>
                                IT Governor, IT Club
                            </li>
                            <li>
                                DOST Scholar
                            </li>
                            <li>
                                IT Passport Level 1 Passer
                            </li>
                        </ul>
                    </li>
                </ol>

            </div>

            <div class="inline-flex items-center justify-center w-full my-10 mt-10">
                <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
                <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                    <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                        <path
                            d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                    </svg>
                </div>
            </div>

            {{-- projects --}}
            <div class="mx-auto max-w-2xl sm:py-48 md:py-38 lg:py-20" id="projects">

                <p>Recent Projects</p>
                <h1
                    class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                    Check My Works</h1>


                <div class="flex flex-wrap mt-10">
                    <div class="lg:w-1/2 md:w-full sm:w-full p-1">
                        <div class=" bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="" src="{{ asset('img/image-1.jpg') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Noteworthy
                                        technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the
                                    biggest
                                    enterprise
                                    technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="lg:w-1/2 md:w-full sm:w-full p-1">
                        <div class=" bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img src="{{ asset('img/image-1.jpg') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Noteworthy
                                        technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the
                                    biggest
                                    enterprise
                                    technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2 md:w-full sm:w-full p-1">
                        <div class=" bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="" src="{{ asset('img/image-1.jpg') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Noteworthy
                                        technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the
                                    biggest
                                    enterprise
                                    technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2 md:w-full sm:w-full p-1">
                        <div class=" bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                            <a href="#">
                                <img class="" src="{{ asset('img/image-1.jpg') }}" alt="" />
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        Noteworthy
                                        technology acquisitions 2021</h5>
                                </a>
                                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the
                                    biggest
                                    enterprise
                                    technology acquisitions of 2021 so far, in reverse chronological order.</p>
                                <a href="#"
                                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Read more
                                    <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            {{-- Services --}}
            <div class="inline-flex items-center justify-center w-full my-10 mt-20">
                <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
                <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
                    <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 14">
                        <path
                            d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                    </svg>
                </div>
            </div>


            <div class="mx-auto max-w-2xl sm:py-48 md:py-38 lg:py-20" id="services">
                <p>Contact Me</p>
                <h1
                    class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
                    Get In Touch</h1>

                <div class="w-full p-1">
                    <div
                        class="bg-white px-10 py-12 border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">

                        <form>
                            <div class="mb-6">
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    name</label>
                                <input type="text" id="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Juan Dela Cruz" required>
                            </div>
                            <div class="mb-6">
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    email</label>
                                <input type="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="name@flowbite.com" required>
                            </div>
                            <div class="mb-6">
                                <label for="subject"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                    subject</label>
                                <input type="email" id="subject"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Need web developer" required>
                            </div>

                            <label for="message"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                                message</label>
                            <textarea id="message" rows="4"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Leave a comment..."></textarea>

                            <button type="submit"
                                class="inline-flex mt-6 items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                SEND MESSAGE
                            </button>
                        </form>

                    </div>
                </div>
            </div>


        </div>


        <footer class="w-full border-t-2 bg-slate-50 text-center p-10 mt-20">
            <p>Copyright © 2023. All rights reserved. Ronil Cajan - PHP Web Developer</p>
        </footer>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
            aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>

        <script>
            const mobileMenu = document.getElementById('mobileMenu');
            const toggleMobileMenu = () => {
                mobileMenu.style.display = mobileMenu.style.display === 'block' ? 'none' : 'block';
            };

            const showButton = document.getElementById('showButton');
            showButton.addEventListener('click', toggleMobileMenu);

            const closeButton = document.getElementById('hideButton');
            closeButton.addEventListener('click', toggleMobileMenu);
        </script>
</body>

</html>
