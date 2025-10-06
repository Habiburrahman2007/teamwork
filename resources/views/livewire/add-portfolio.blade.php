<div>
    <section class="bg-white rounded-2xl xl:ml-96 p-6 border border-gray-200 shadow-md">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-800">Add a New Portfolio</h2>

            <form wire:submit.prevent="submit">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <!-- Title -->
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-700">Product Title</label>
                        <input type="text" wire:model="title"
                            class="bg-white border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            placeholder="Type portfolio's title" required>
                        @error('title')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Category -->
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700">Category</label>
                        <select id="category" wire:model.defer="category"
                            class="bg-white border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                            <option value="" selected disabled>Select category</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ strtoupper($item->name) }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Description -->
                    <div class="sm:col-span-2">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-700">Description</label>
                        <textarea id="description" rows="8" wire:model="description"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-white rounded-lg border border-gray-400 focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Your description here"></textarea>
                        @error('description')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Upload -->
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-700" for="user_avatar">Upload
                            Portfolio</label>
                        <input id="user_avatar" type="file" wire:model="image"
                            class="block w-full text-sm text-gray-900 border border-gray-400 rounded-lg cursor-pointer bg-white focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 mb-3">
                        @error('image')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Submit Button -->
                <button type="submit"
                    class="inline-flex items-center justify-center w-full sm:w-auto px-5 py-2.5 text-sm font-semibold 
    text-black bg-indigo-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 shadow-md transition">
                    Add Portfolio
                </button>

            </form>
        </div>
    </section>
</div>
