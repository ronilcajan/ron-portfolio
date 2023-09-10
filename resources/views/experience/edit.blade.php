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
            @php
                $present_work = $exp->present_work ? 'true' : 'false';
            @endphp
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-5" x-data="{ isChecked: {{ $present_work }} }">
                <form action="{{ route('experience.update', $exp->id) }}" method="POST">
                    @method('PUT')
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
                    <div class="flex items-center mb-4">
                        <input id="present_work" type="checkbox" {{ $exp->present_work ? 'checked' : null }}
                            x-model="isChecked" name="present_work"
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="present_work" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I am
                            currently working here</label>
                    </div>
                    <div class="lg:flex mb-3">
                        <div class="w-full mr-2">
                            <x-input-label value="Date started" class="mb-2"></x-input-label>
                            <x-text-input class="w-full mr-2" name="date_started" type="date"
                                value="{{ date('Y-m-d', strtotime($exp->date_started)) }}"></x-text-input>
                            @error('date_started')
                                <x-input-error :messages="$message"></x-input-error>
                            @enderror
                        </div>
                        <div class="w-full" x-bind:class="{ 'hidden': isChecked }" x-transition>
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
                            class="description block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
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
    @push('scripts')
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

        <script>
            tinymce.init({
                selector: 'textarea.description',
                width: 900,
                height: 300
            });
        </script>
    @endpush
</x-app-layout>
