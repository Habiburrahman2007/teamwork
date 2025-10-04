<main class="flex-1 p-6 overflow-y-auto">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($portfolios as $portfolio)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="{{ $portfolio->image_url ? asset('storage/' . $portfolio->image_url) : 'https://via.placeholder.com/400x200' }}"
                    alt="Project Image" class="w-full h-48 object-cover">

                <div class="p-4">
                    <h2 class="text-lg font-semibold text-gray-800">{{ $portfolio->title }}</h2>
                    <p class="text-gray-600 text-sm mt-1">{{ Str::limit($portfolio->description, 80) }}</p>

                    <div class="flex items-center justify-between mt-3">
                        <span class="text-xs text-gray-500">{{ $portfolio->created_at->diffForHumans() }}</span>
                        <button class="text-gray-500 hover:text-red-500">❤</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>
