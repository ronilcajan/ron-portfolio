<x-app-layout :title="$title">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($title) }}
        </h2>
    </x-slot>
    <div class="py-6">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 p-2 ">
            <div class="flex justify-between mb-5">

                <x-breadcrumb :title='$title'></x-breadcrumb>

            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-5" x-data="{ isChecked: true }">
                <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <x-input-label value="Project title" class="mb-2"></x-input-label>
                        <x-text-input class="w-full mr-2 mb-2" name="title" required value="{{ old('title') }}"
                            placeholder="Enter Project title"></x-text-input>
                        @error('title')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <x-input-label value="Skills" class="mb-2"></x-input-label>
                        <x-text-input class="w-full mr-2 mb-2" name="skills" required value="{{ old('skills') }}"
                            placeholder="Enter skills *separated in comma(,)"></x-text-input>
                        @error('skills')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror
                    </div>
                    <div class="flex items-center mb-4">
                        <input id="working" type="checkbox" value="1" x-model="isChecked" name="working"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="working" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I am
                            currently working on this project</label>
                        @error('working')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror
                    </div>
                    <div class="lg:flex mb-3">
                        <div class="w-full mr-2">
                            <x-input-label value="Date started" class="mb-2"></x-input-label>
                            <x-text-input class="w-full mr-2" name="date_started" type="date"
                                value="{{ old('date_started') }}" required></x-text-input>
                            @error('date_started')
                                <x-input-error :messages="$message"></x-input-error>
                            @enderror
                        </div>
                        <div class="w-full" x-bind:class="{ 'hidden': isChecked }" x-transition>
                            <x-input-label value="Date ended" class="mb-2"></x-input-label>
                            <x-text-input class="w-full mr-2" name="date_ended" type="date"
                                value="{{ old('date_ended') }}"></x-text-input>
                            @error('date_ended')
                                <x-input-error :messages="$message"></x-input-error>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <x-input-label value="Cover photo" class="mb-2"></x-input-label>
                        <x-text-input class="w-full mr-2 mb-2" accept="image/*" type="file" name="cover_photo"
                            required></x-text-input>
                        @error('cover_photo')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <x-input-label value="Description" class="mb-2"></x-input-label>
                        <textarea id="message" rows="4" name="description"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write work responsibilities...">{{ old('description') }}</textarea>
                        <div>
                            @error('description')
                                <x-input-error :messages="$message"></x-input-error>
                            @enderror
                        </div>
                    </div>


                    <label class="block my-3 text-sm font-medium text-gray-900 dark:text-white"
                        for="multiple_files">Upload multiple files</label>
                    <input accept="image/*"
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="multiple_files" type="file" name="project_images[]" multiple>


                    <div class="mt-5 flex justify-end">
                        <x-secondary-button class="mb-2 mr-2" onclick="location.href='{{ route('projects') }}'">
                            Cancel </x-secondary-button>
                        <x-primary-button class="mb-2" type="submit">
                            Create </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
