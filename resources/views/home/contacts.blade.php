<x-home-layout :title="$title" :profile="$profile">
    <div class="mx-auto max-w-2xl sm:py-48 md:py-38 lg:py-20" id="contact">
        <p>Contact Me</p>
        <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl">
            Get In Touch</h1>

        <div class="w-full p-1">
            <div class="bg-white px-10 py-12 border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">

                @if (session('status'))
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-2" x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)"
                        x-show="show" x-transition>
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
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Your
                            name</label>
                        <input type="text" id="name" name="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Juan Dela Cruz" required>
                        @error('name')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                            email</label>
                        <input type="email" id="email" name="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="name@flowbite.com" required>
                        @error('email')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="subject" class="block mb-2 text-sm font-medium text-gray-900">Your
                            subject</label>
                        <input type="text" id="subject" name="subject"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Need web developer" required>
                        @error('subject')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror
                    </div>

                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your
                        message</label>
                    <textarea id="message" rows="4" name="message"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
