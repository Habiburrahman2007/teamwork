<main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    <section class="bg-white rounded-2xl dark:bg-slate-850 xl:ml-96 p-6">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-800 dark:text-white">Edit Portfolio</h2>

            <form wire:submit.prevent="update">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    {{-- Title --}}
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">
                            Product Title
                        </label>
                        <input type="text" wire:model="title"
                            class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg 
                            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                            dark:bg-slate-700 dark:border-slate-600 dark:placeholder-gray-400 dark:text-white"
                            placeholder="Type portfolio's title">
                        @error('title')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Category --}}
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Category</label>
                        <select wire:model="category"
                            class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg 
                            focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 
                            dark:bg-slate-700 dark:border-slate-600 dark:text-white">
                            <option value="" selected disabled>Select category</option>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ strtoupper($item->name) }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Description --}}
                    <div class="sm:col-span-2">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-700 dark:text-gray-300">Description</label>
                        <textarea id="description" rows="8" wire:model="description"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-100 rounded-lg border border-gray-300 
                            focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-700 dark:border-slate-600 
                            dark:placeholder-gray-400 dark:text-white"
                            placeholder="Your description here"></textarea>
                        @error('description')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Image --}}
                    <div class="sm:col-span-2">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Upload New Image (optional)
                        </label>
                        <input type="file" wire:model="image"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer 
                            bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 
                            dark:placeholder-gray-400">

                        @error('image')
                            <p class="text-red-500 text-sm">{{ $message }}</p>
                        @enderror

                        {{-- Current Image --}}
                        @if ($portfolio && $portfolio->image)
                            <div class="mt-4">
                                <p class="text-sm text-gray-500 mb-1">Current Image:</p>
                                <img src="{{ asset('storage/' . $portfolio->image) }}" alt="Portfolio Image"
                                    class="w-32 rounded-lg">
                            </div>
                        @endif
                    </div>
                </div>

                <button
                    class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center 
                    text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:ring-blue-200 
                    dark:focus:ring-blue-900">
                    Update Portfolio
                </button>
            </form>
        </div>
    </section>
</main>
