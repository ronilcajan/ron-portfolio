<x-home-layout :title="$title" :profile="$profile">

    {{-- projects --}}
    <div class="mx-auto max-w-2xl sm:py-48 md:py-38 lg:py-20" id="projects">

        <p>Recent Projects</p>
        <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl">
            Check My Works</h1>

        @livewire('projects.frontend-projects')

    </div>



</x-home-layout>
