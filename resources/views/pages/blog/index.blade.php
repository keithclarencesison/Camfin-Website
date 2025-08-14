<x-layouts.app>
    <h1 class="text-3xl font-bold text-center my-6">Blog</h1>

    <div class="max-w-4xl mx-auto">
        @forelse($blogs as $blog)
            <div class="border-b border-gray-200 py-4">
                <h2 class="text-xl font-semibold">
                    <a href="{{ route('blog.show', $blog->slug) }}" class="text-blue-600 hover:underline">
                        {{ $blog->title }}
                    </a>
                </h2>
                <p class="text-gray-500 text-sm">
                    By {{ $blog->author }} | {{ $blog->created_at->format('M d, Y') }}
                </p>
                <p class="mt-2 text-gray-700">
                    {{ Str::limit(strip_tags($blog->content), 150) }}
                </p>
            </div>
        @empty
            <p class="text-center text-gray-500">No blog posts yet.</p>
        @endforelse
    </div>
</x-layouts.app>