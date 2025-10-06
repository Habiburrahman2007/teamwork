<div class="mt-6">
    <form wire:submit.prevent="submit" class="mb-4">
        <textarea wire:model="content" rows="3"
            class="w-full border border-gray-300 rounded-lg p-2 focus:ring-blue-500 focus:border-blue-500"
            placeholder="Write a comment..."></textarea>
        @error('content') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror

        <button type="submit"
            class="mt-2 bg-blue-600 hover:bg-blue-700 text-white text-sm font-semibold px-4 py-2 rounded-lg">
            Post Comment
        </button>
    </form>

    <div class="space-y-3">
        @foreach ($comments as $comment)
            <div class="p-3 border border-gray-200 rounded-lg">
                <p class="text-gray-800 text-sm">{{ $comment->content }}</p>
                <span class="text-xs text-gray-500">{{ $comment->user->name ?? 'Anonymous' }} · {{ $comment->created_at->diffForHumans() }}</span>
            </div>
        @endforeach
    </div>
</div>
