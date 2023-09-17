<x-home-layout :title="$title" :profile="$profile">

    {{-- education --}}
    <div class="mx-auto max-w-2xl sm:py-48 md:py-38 lg:py-20" id="education">
        <p>Education</p>
        <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl">
            Check My Education</h1>

        <ol class="relative border-l border-gray-200 dark:border-gray-700 mt-10">
            @foreach ($educations as $education)
                <li class="mb-10 ml-4">
                    <div
                        class="absolute w-3 h-3 bg-gray-200 rounded-full mt-1.5 -left-1.5 border border-white dark:border-gray-900 dark:bg-gray-700">
                    </div>
                    <time
                        class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">{{ date('F Y', strtotime($education->date_started)) }}
                        - {{ date('F Y', strtotime($education->date_graduated)) }}</time>
                    <h3 class="text-lg font-semibold text-gray-900">{{ $education->course }}
                    </h3>
                    <h4 class="text-md font-semibold text-gray-900">{{ $education->school }}
                    </h4>
                    {!! $education->content !!}
                </li>
            @endforeach


        </ol>

    </div>



</x-home-layout>
