<div>
    <div class="relative">
        <div class="mb-4">
            <label for="county" class="block text-sm font-medium text-gray-700">County</label>
            <div class="mt-1 relative">
                <input
                    type="text"
                    wire:model.live="searchTerm"
                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                    placeholder="Search county..."
                >
                @error('county') 
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <select
            id="county"
            name="county"
            wire:model.live="county"
            class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"
            required
        >
            <option value="">Select a county</option>
            @foreach($counties as $countyOption)
                <option value="{{ $countyOption->id }}">{{ $countyOption->name }}</option>
            @endforeach
        </select>
    </div>
</div>