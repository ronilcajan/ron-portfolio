<x-home-layout :title="$project->title" :profile="$profile">

    <div class="mx-auto max-w-2xl sm:py-48 md:py-38 lg:py-28">

        <h1
            class="text-center my-10 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-white">
            {{ $project->title }}</h1>


        <div class="grid gap-4">
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/' . $project->cover_photo) }}"
                    alt="">
            </div>
            <div class="grid grid-cols-5 gap-4">
                @foreach ($project->project_images as $images)
                    <div>
                        <img class="h-auto max-w-full rounded-lg" src="{{ asset('storage/' . $images->images) }}"
                            alt="">
                    </div>
                @endforeach
            </div>
        </div>

        <div class="flex mt-3">

            <span class="text-gray-900 font-thin">Date: {{ date('F d Y', strtotime($project->date_started)) }} -
                {{ $project->working ? 'Present' : date('M-d-Y', strtotime($project->date_ended)) }}</span>
        </div>
        @php
            $skills = explode(',', $project->skills);
        @endphp
        Tags:
        @foreach ($skills as $skill)
            <span
                class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $skill }}</span>
        @endforeach

        <p class="mt-3">
            {!! $project->description !!}
        </p>
    </div>
</x-home-layout>
