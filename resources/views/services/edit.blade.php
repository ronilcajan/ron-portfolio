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


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-5">
                <form action="{{ route('services.update', $services->id) }}" enctype="multipart/form-data" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <x-input-label value="Title/service name" class="mb-2"></x-input-label>
                        <x-text-input class="w-full mr-2 mb-2" name="title" required value="{{ $services->title }}"
                            placeholder="Enter Title/service name"></x-text-input>
                        @error('title')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <x-input-label value="Icon" class="mb-2"></x-input-label>
                        <img class="m-4" width="40" src="{{ asset('storage/' . $services->icon) }}">
                        <x-text-input class="w-full mr-2 mb-2" accept="image/*" type="file"
                            name="icon"></x-text-input>
                        @error('icon')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <x-input-label value="Description" class="mb-2"></x-input-label>
                        <textarea id="message" rows="4" name="description"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write something here...">{{ $services->description }}</textarea>
                        <div>
                            @error('description')
                                <x-input-error :messages="$message"></x-input-error>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-5 flex justify-end">
                        <x-secondary-button class="mb-2 mr-2" onclick="location.href='{{ route('services') }}'">
                            Cancel </x-secondary-button>
                        <x-primary-button class="mb-2" type="submit">
                            Update </x-primary-button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>
