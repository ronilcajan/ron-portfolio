<x-app-layout>
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

            @livewire('experience.create-experience')
        </div>
    </div>

</x-app-layout>
