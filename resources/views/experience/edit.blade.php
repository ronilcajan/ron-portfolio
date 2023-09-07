<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($title) }}
        </h2>
    </x-slot>
    <div class="py-6">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-2 ">
            <div class="flex justify-between mb-5">
                <nav class="flex" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ route('dashboard') }}"
                                class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                Home
                            </a>
                        </li>
                        <li aria-current="page">
                            <div class="flex items-center">
                                <svg class="w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span
                                    class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">{{ $title }}</span>
                            </div>
                        </li>
                    </ol>
                </nav>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-5">
                <form action="{{ route('experience.update', $exp->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <x-input-label value="Work Title" class="mb-2"></x-input-label>
                        <x-text-input class="w-full mr-2 mb-2" name="title" value="{{ $exp->title }}"
                            placeholder="Enter Work Title"></x-text-input>
                        @error('title')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <x-input-label value="Company" class="mb-2"></x-input-label>
                        <x-text-input class="w-full mr-2 mb-2" name="company" value="{{ $exp->company }}"
                            placeholder="Enter Company"></x-text-input>
                        @error('company')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror
                    </div>
                    <div class="flex mb-3">
                        <div class="w-full mr-2">
                            <x-input-label value="Date started" class="mb-2"></x-input-label>
                            <x-text-input class="w-full mr-2" name="date_started" type="date"
                                value="{{ date('Y-m-d', strtotime($exp->date_started)) }}"></x-text-input>
                            @error('date_started')
                                <x-input-error :messages="$message"></x-input-error>
                            @enderror
                        </div>
                        <div class="w-full">
                            <x-input-label value="Date ended" class="mb-2"></x-input-label>
                            <x-text-input class="w-full mr-2" name="date_ended" type="date"
                                value="{{ date('Y-m-d', strtotime($exp->date_ended)) }}"></x-text-input>
                            @error('date_ended')
                                <x-input-error :messages="$message"></x-input-error>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <x-input-label value="Description" class="mb-2"></x-input-label>
                        <textarea id="message" rows="4" name="description"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write work responsibilities...">{{ $exp->description }}</textarea>
                        <div>
                            @error('description')
                                <x-input-error :messages="$message"></x-input-error>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-5 flex justify-end">
                        <x-secondary-button class="mb-2 mr-2" onclick="location.href='{{ route('experience') }}'">
                            Cancel </x-secondary-button>
                        <x-primary-button class="mb-2" type="submit">
                            Update </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
