<div>

    <div class="flex justify-end">
        <x-text-input class="mb-3" placeholder="Enter search" wire:model.live="search"></x-text-input>
    </div>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Company
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($works as $work)
                    <tr wire:key="{{ $work->id }}" class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $work->title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $work->company }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $work->date_started }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('experience.edit', $work->id) }}"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" wire:click="delete({{ $work->id }})"
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
    <div class="mt-3">
        {{ $works->links() }}
    </div>
</div>
