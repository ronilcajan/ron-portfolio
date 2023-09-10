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
                <form action="{{ route('education.update', $education->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <x-input-label value="Course/program" class="mb-2"></x-input-label>
                        <x-text-input class="w-full mr-2 mb-2" name="course" required value="{{ $education->course }}"
                            placeholder="Enter Course/program"></x-text-input>
                        @error('course')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <x-input-label value="School" class="mb-2"></x-input-label>
                        <x-text-input class="w-full mr-2 mb-2" name="school" required value="{{ $education->school }}"
                            placeholder="Enter School"></x-text-input>
                        @error('school')
                            <x-input-error :messages="$message"></x-input-error>
                        @enderror
                    </div>
                    <div class="lg:flex mb-3">
                        <div class="w-full mr-2">
                            <x-input-label value="Date started" class="mb-2 mt-2"></x-input-label>
                            <x-text-input class="w-full mr-2" name="date_started" type="date" required
                                value="{{ $education->date_started }}" wire:model="date_started"></x-text-input>
                            @error('date_started')
                                <x-input-error :messages="$message"></x-input-error>
                            @enderror
                        </div>
                        <div class="w-full">
                            <x-input-label value="Date graduated" class="mb-2 mt-2"></x-input-label>
                            <x-text-input class="w-full mr-2" name="date_graduated" type="date"
                                value="{{ $education->date_graduated }}"></x-text-input>
                            @error('date_graduated')
                                <x-input-error :messages="$message"></x-input-error>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <x-input-label value="Content" class="mb-2"></x-input-label>
                        <textarea id="message" rows="4" name="content"
                            class="description block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Write something here...">{{ $education->content }}</textarea>
                        <div>
                            @error('content')
                                <x-input-error :messages="$message"></x-input-error>
                            @enderror
                        </div>
                    </div>

                    <div class="mt-5 flex justify-end">
                        <x-secondary-button class="mb-2 mr-2" onclick="location.href='{{ route('education') }}'">
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
