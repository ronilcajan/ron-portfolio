<x-home-layout :title="$title" :profile="$profile">

    {{-- experiences --}}
    <div class="mx-auto max-w-2xl sm:py-48 md:py-38 lg:py-20" id="work">
        <p>Work Experience</p>
        <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl">
            Check My Expereince</h1>

        <ol class="relative border-l border-gray-200 dark:border-gray-700 mt-10">
            @foreach ($experiences as $experience)
                <li class="mb-10 ml-4">
                    <div
                        class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                    </div>
                    <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">
                        {{ date('M Y', strtotime($experience->date_started)) }} -
                        {{ $experience->present_work ? 'Present' : date('M Y', strtotime($experience->date_ended)) }}</time>
                    <h3 class="text-lg font-semibold text-gray-900">{{ $experience->title }}
                    </h3>
                    <h4 class="text-md font-semibold text-gray-900">{{ $experience->company }}
                    </h4>
                    {!! $experience->description !!}
                </li>
            @endforeach
        </ol>

    </div>

</x-home-layout>
