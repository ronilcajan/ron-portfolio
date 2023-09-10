<div>

    <div class="flex justify-between">

        <div class="flex align-middle">
            <p class="p-2"> Show</p>
            <select id="small" wire:model.live="entries"
                class="block w-full p-2 pr-8 mb-6 text-sm text-gray-900 border border-gray-300 rounded-md bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option>5</option>
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option value="1000000">All</option>
            </select>
            <p class="p-2"> entries</p>

        </div>


        <x-text-input class="mb-3" placeholder="Enter search" wire:model.live="search"></x-text-input>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Icon
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($services as $service)
                        <tr wire:key="{{ $service->id }}"
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $service->title }}
                            </th>
                            <td class="px-6 py-4">
                                <img width="30" src="{{ asset('storage/' . $service->icon) }}" />
                            </td>
                            <td class="px-6 py-4">
                                {{ $service->description }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('education.edit', $service->id) }}"
                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <a href="#" wire:click="delete({{ $service->id }})"
                                    class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                            <th colspan="4" scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                                No data found
                            </th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <div class="mt-3">
        {{ $services->links() }}
    </div>
</div>
