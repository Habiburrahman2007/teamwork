<section class="bg-white rounded-2xl xl:ml-96 p-8 shadow-md">
    <div class="mx-auto max-w-2xl">
        <h2 class="mb-6 text-2xl font-bold text-gray-900">Edit Portfolio</h2>

        <form wire:submit.prevent="update" class="space-y-5">
            <!-- Title -->
            <div>
                <label class="block mb-2 text-sm font-semibold text-gray-700">Product Title</label>
                <input type="text" wire:model="title"
                    class="w-full p-2.5 text-sm rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500
                    bg-gray-50 text-gray-900"
                    placeholder="Type portfolio's title">
                @error('title') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Category -->
            <div>
                <label class="block mb-2 text-sm font-semibold text-gray-700">Category</label>
                <select wire:model="category"
                    class="w-full p-2.5 text-sm rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500
                    bg-gray-50 text-gray-900">
                    <option value="" selected disabled>Select category</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ strtoupper($item->name) }}</option>
                    @endforeach
                </select>
                @error('category') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Description -->
            <div>
                <label for="description" class="block mb-2 text-sm font-semibold text-gray-700">Description</label>
                <textarea id="description" rows="6" wire:model="description"
                    class="w-full p-2.5 text-sm rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500
                    bg-gray-50 text-gray-900"
                    placeholder="Your description here"></textarea>
                @error('description') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Image Upload -->
            <div>
                <label class="block mb-2 text-sm font-semibold text-gray-700">Upload New Image (optional)</label>
                <input type="file" wire:model="image"
                    class="block w-full text-sm border border-gray-300 rounded-lg cursor-pointer 
                    bg-gray-50 text-gray-700 focus:ring-blue-500 focus:border-blue-500">

                @error('image') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror

                @if ($existingImageUrl)
                    <div class="mt-4">
                        <p class="text-sm text-gray-600 mb-2">Current Image:</p>
                        <img src="{{ asset('storage/' . $existingImageUrl) }}" alt="Portfolio Image" class="w-32 rounded-lg shadow-sm">
                    </div>
                @endif
            </div>

            <!-- Button -->
            <button
                class="inline-flex items-center justify-center w-full sm:w-auto px-5 py-2.5 text-sm font-semibold 
                text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 
                transition">
                Update Portfolio
            </button>
        </form>
    </div>
</section>
