<x-home-layout :title="$title" :profile="$profile">
    {{-- Services --}}
    <div class="mx-auto max-w-2xl sm:py-48 md:py-38 lg:py-20" id="services">
        <p>Services</p>
        <h1 class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl">
            What I Do</h1>


        <div class="flex flex-wrap">
            @foreach ($services as $service)
                <div class="lg:w-1/2 md:w-1/2 sm:w-full p-1">
                    <div
                        class="bg-white px-8 py-12 border items-center text-center hover:shadow-lg hover:bg-indigo-100 border-gray-200 shadow dark:bg-gray-800 dark:border-gray-700">
                        <img class="mx-auto" width="60" src="{{ asset('storage/' . $service->icon) }}" alt="">

                        <h4 class="my-4 text-md font-bold">{{ $service->title }}</h4>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</x-home-layout>
