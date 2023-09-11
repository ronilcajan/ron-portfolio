<x-home-layout :title="$title" :profile="$profile">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
        <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
        </div>
    </div>
    <div class="mx-auto max-w-2xl sm:py-48 md:py-38 lg:py-32 mt-10" id="home">
        <div class="text-center">
            <div class="text-center mb-4">
                <img class="mx-auto rounded-full"
                    src="{{ $profile->avatar ? asset('storage/' . $profile->avatar) : asset('img/rontech.png') }}"
                    width="200" alt="photo">
            </div>
            <p class="text-lg leading-8 text-gray-600">HELLO!</p>
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">I AM
                {{ Str::upper($profile->name) }}
            </h1>
            <p class="text-lg leading-8 text-gray-600">{{ $profile->position }}</p>
            <div class="flex items-center justify-center gap-x-6 mt-2">
                <a href="https://github.com/ronilcajan"><img class="w-5" src="{{ asset('img/github.png') }}"
                        alt=""></a>
                <a href="https://www.linkedin.com/in/roncajan"><img class="w-5" src="{{ asset('img/linkedin.png') }}"
                        alt=""></a>
                <a href="https://twitter.com/RonCajan"><img class="w-5" src="{{ asset('img/twitter.png') }}"
                        alt=""></a>
                <a href="https://join.skype.com/invite/VdA7xJErWhiW"><img class="w-5"
                        src="{{ asset('img/skype.png') }}" alt=""></a>
                <a href="mailto:{{ $profile->email }}"><img class="w-5" src="{{ asset('img/gmail.png') }}"
                        alt=""></a>
            </div>
            <p class="mt-3 text-lg leading-8 text-gray-600">{!! $profile->bio !!}</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <img class="w-10" src="{{ asset('img/logomark.min.svg') }}" alt="">
                <img class="w-10" src="{{ asset('img/codeigniter.png') }}" alt="">
                <img class="w-12" src="{{ asset('img/php.png') }}" alt="">
                <img class="w-12" src="{{ asset('img/js.png') }}" alt="">
                <img class="w-12" src="{{ asset('img/livewire.png') }}" alt="">
                <img class="w-12" src="{{ asset('img/alphine.png') }}" alt="">
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
    <div class="mx-auto max-w-2xl sm:py-48 md:py-38 lg:py-20" id="work">
        <p>Work Experience</p>
        <h1
            class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
            Check My Expereince</h1>

        <ol class="relative border-l border-gray-200 dark:border-gray-700 mt-10">
            @foreach ($experiences as $experience)
                <li class="mb-10 ml-4">
                    <div
                        class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                    </div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                        {{ date('M Y', strtotime($experience->date_started)) }} -
                        {{ $experience->present_work ? 'Present' : date('M Y', strtotime($experience->date_ended)) }}</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $experience->title }}
                    </h3>
                    <h4 class="text-md font-semibold text-gray-900 dark:text-white">{{ $experience->company }}
                    </h4>
                    {!! $experience->description !!}
                </li>
            @endforeach
        </ol>

    </div>
    <div class="inline-flex items-center justify-center w-full my-10 mt-10">
        <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
        <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
            <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 18 14">
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
            @foreach ($services as $service)
                <div class="lg:w-1/2 md:w-1/2 sm:w-full p-1">
                    <div
                        class="bg-white px-8 py-12 border items-center text-center hover:shadow-lg hover:bg-indigo-100 border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                        <img class="mx-auto" width="60" src="{{ asset('storage/' . $service->icon) }}"
                            alt="">

                        <h4 class="my-4 text-md font-bold">{{ $service->title }}</h4>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

    <div class="inline-flex items-center justify-center w-full my-10 mt-10">
        <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
        <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
            <svg class="w-4 h-4 text-gray-700 dark:text-gray-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="currentColor" viewBox="0 0 18 14">
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
            @foreach ($educations as $education)
                <li class="mb-10 ml-4">
                    <div
                        class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                    </div>
                    <time
                        class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{ date('F Y', strtotime($education->date_started)) }}
                        - {{ date('F Y', strtotime($education->date_graduated)) }}</time>
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{ $education->course }}
                    </h3>
                    <h4 class="text-md font-semibold text-gray-900 dark:text-white">{{ $education->school }}
                    </h4>
                    {!! $education->content !!}
                </li>
            @endforeach


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

        @livewire('projects.frontend-projects')

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


    <div class="mx-auto max-w-2xl sm:py-48 md:py-38 lg:py-20" id="contact">
        <p>Contact Me</p>
        <h1
            class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
            Get In Touch</h1>

        <div class="w-full p-1">
            <div class="bg-white px-10 py-12 border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">

                @if (session('status'))
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-2" x-data="{ show: true }"
                        x-init="setTimeout(() => show = false, 4000)" x-show="show" x-transition>
                        <div class='flex items-center p-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800'
                            class="" role="alert">
                            <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="sr-only">Info</span>
                            <div>
                                <span class="font-medium">Success!</span> {{ session('status') }}.
                            </div>
                        </div>
                    </div>
                @endif
                <form action="{{ route('message.store') }}" method="POST">
                    @csrf
                    <div class="mb-6">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            name</label>
                        <input type="text" id="name" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Juan Dela Cruz" required>
                        @error('name')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            email</label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="name@flowbite.com" required>
                        @error('email')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="subject"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                            subject</label>
                        <input type="text" id="subject" name="subject"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Need web developer" required>
                        @error('subject')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror
                    </div>

                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                        message</label>
                    <textarea id="message" rows="4" name="message"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Leave a comment..."></textarea>
                    @error('message')
                        <x-input-error :messages="$message"></x-input-error>
                    @enderror

                    <button type="submit"
                        class="inline-flex mt-6 items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        SEND MESSAGE
                    </button>
                </form>

            </div>
        </div>
    </div>

</x-home-layout>
