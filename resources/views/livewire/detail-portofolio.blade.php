<section class="bg-white rounded-2xl xl:ml-96 p-6 border border-gray-200 shadow-md">
    <div class="max-w-3xl mx-auto">
        <!-- Gambar utama -->
        <div class="mb-6">
            <img src="{{ asset('storage/' . $portfolio->image_url) }}"
                alt="{{ $portfolio->title }}"
                class="w-full rounded-lg shadow-sm object-cover">
        </div>

        <!-- Judul dan kategori -->
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-bold text-gray-800">{{ $portfolio->title }}</h1>
            <span class="text-sm bg-blue-100 text-blue-600 px-2 py-1 rounded-md">
                {{ $portfolio->category->name ?? 'Uncategorized' }}
            </span>
        </div>

        <!-- Info tambahan -->
        <p class="text-gray-500 text-sm mb-4">
            Diposting {{ $portfolio->created_at->diffForHumans() }}
        </p>

        <!-- Deskripsi -->
        <div class="prose max-w-none text-gray-700 leading-relaxed mb-6">
            {{ $portfolio->description }}
        </div>

        <!-- Aksi -->
        <div class="flex items-center gap-4 border-t pt-4">
            <!-- Like -->
            <button wire:click="like({{ $portfolio->id }})"
                class="flex items-center text-sm text-gray-600 hover:text-red-500 transition">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 mr-1 {{ $portfolio->likes->where('user_id', auth()->id())->count() ? 'text-red-600' : 'text-gray-400' }}"
                    viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5
                        2 6 4 4 6.5 4c1.74 0 3.41 1.01 4.13 2.44
                        C11.09 5.01 12.76 4 14.5 4
                        17 4 19 6 19 8.5
                        c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
                </svg>
                {{ $portfolio->likes->count() }} Likes
            </button>

            <!-- Comment (akan diaktifkan nanti) -->
            <button class="flex items-center text-sm text-gray-600 hover:text-blue-500 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="currentColor"
                    viewBox="0 0 24 24">
                    <path
                        d="M21 6h-18c-1.104 0-2 .896-2
                        2v9c0 1.104.896 2 2 2h4v4l5-4h9c1.104
                        0 2-.896 2-2v-9c0-1.104-.896-2-2-2z" />
                </svg>
                {{ $portfolio->comments_count ?? 0 }} Comments
            </button>
        </div>
    </div>
</section>
