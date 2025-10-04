<section class="bg-white min-h-screen w-full flex items-center justify-center">
    <div class=" h-full p-6 lg:py-16">
        <h2 class="mb-4 text-2xl font-bold text-gray-900 text-center">
            Add a new portfolio
        </h2>
        @if (session()->has('success'))
            <div class="p-3 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
                {{ session('success') }}
            </div>
        @endif
        <form wire:submit.prevent="submit" enctype="multipart/form-data">
            <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                <!-- Title -->
                <div>
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900">
                        Title
                    </label>
                    <input type="text" wire:model="title" id="title"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg 
            focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
            dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Type portfolio name" required>
                    @error('title')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Category -->
                <div>
                    <label for="category" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                    <select id="category" wire:model="category"
                        class="bg-gray-50 border border-gray-300 text-gray-400 text-sm rounded-lg 
        focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 
        dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
        dark:focus:ring-primary-500 dark:focus:border-primary-500">
                        <option value="">Select category</option>
                        @foreach ($categories as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Description -->
                <div class="sm:col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900">
                        Description
                    </label>
                    <textarea id="description" rows="8" wire:model="description"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border 
            border-gray-300 focus:ring-primary-500 focus:border-primary-500 
            dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
            dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Your description here"></textarea>
                    @error('description')
                        <span class="text-red-600 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <!-- File Upload -->
                <div class="sm:col-span-2 flex items-center justify-center w-full">
                    <label for="dropzone-file"
                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                            </svg>
                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click
                                    to upload</span> or drag and drop</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)
                            </p>
                        </div>
                        <input id="dropzone-file" type="file" class="hidden" wire:model="image" />
                        @error('image')
                            <span class="text-red-600 text-sm">{{ $message }}</span>
                        @enderror
                    </label>
                </div>

            </div>


            <button type="submit"
                class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center 
                text-white bg-indigo-700 rounded-lg focus:ring-4 focus:ring-indigo-200 
                dark:focus:ring-indigo-900 hover:bg-indigo-800">
                Add Portfolio
            </button>
        </form>
    </div>
</section>
