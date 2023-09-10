<div>
    <div class="flex flex-wrap mt-10 mb-2">
        @foreach ($projects as $project)
            <div wire:key="{{ $project->id }}" class="lg:w-1/2 md:w-full sm:w-full p-1">
                <div class=" bg-white border border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="w-full" src="{{ asset('storage/' . $project->cover_photo) }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $project->title }}</h5>
                        </a>
                        @php
                            $skills = explode(',', $project->skills);
                        @endphp
                        @foreach ($skills as $skill)
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $skill }}</span>
                        @endforeach
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400"> {!! Str::limit($project->description, 100, '...') !!}</p>
                        <a href="{{ route('project.view', $project->id) }}"
                            class="inline-flex items-center px-3 py-2 mt-5 text-sm font-medium text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            View more
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    {{ $projects->links() }}
</div>
