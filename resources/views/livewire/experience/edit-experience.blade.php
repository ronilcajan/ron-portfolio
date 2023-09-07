<div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-5">
        <form wire:submit="create">
            <div class="mb-3">
                <x-input-label value="Work Title" class="mb-2"></x-input-label>
                <x-text-input class="w-full mr-2 mb-2" name="title" wire:model="title"
                    placeholder="Enter Work Title"></x-text-input>
                @error('title')
                    <x-input-error :messages="$message"></x-input-error>
                @enderror

            </div>
            <div class="mb-3">
                <x-input-label value="Company" class="mb-2"></x-input-label>
                <x-text-input class="w-full mr-2 mb-2" name="company" wire:model="company"
                    placeholder="Enter Company"></x-text-input>
                @error('company')
                    <x-input-error :messages="$message"></x-input-error>
                @enderror
            </div>
            <div class="flex mb-3">
                <div class="w-full mr-2">
                    <x-input-label value="Date started" class="mb-2"></x-input-label>
                    <x-text-input class="w-full mr-2" name="date_started" type="date"
                        wire:model="date_started"></x-text-input>
                    @error('date_started')
                        <x-input-error :messages="$message"></x-input-error>
                    @enderror
                </div>
                <div class="w-full">
                    <x-input-label value="Date ended" class="mb-2"></x-input-label>
                    <x-text-input class="w-full mr-2" name="date_ended" type="date"
                        wire:model="date_ended"></x-text-input>
                    @error('date_ended')
                        <x-input-error :messages="$message"></x-input-error>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <x-input-label value="Description" class="mb-2"></x-input-label>
                <textarea id="message" rows="4" name="description" wire:model="description"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Write work responsibilities..."></textarea>
                <div>
                    @error('description')
                        <x-input-error :messages="$message"></x-input-error>
                    @enderror
                </div>
            </div>

            <div class="mt-5 flex justify-end">
                <x-secondary-button class="mb-2 mr-2" onclick="location.href='{{ route('experience') }}'">
                    Cancel </x-secondary-button>
                <x-primary-button class="mb-2" type="submit">
                    Save </x-primary-button>
            </div>
        </form>
    </div>
</div>
