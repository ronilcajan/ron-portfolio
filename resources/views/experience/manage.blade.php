<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($title) }}
        </h2>
    </x-slot>




    <div class="py-12">



        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex justify-end">
                <x-primary-button class="mb-2" data-x> Create Experience </x-primary-button>
            </div>

            @livewire('experience.experience-list')
        </div>
    </div>

</x-app-layout>
