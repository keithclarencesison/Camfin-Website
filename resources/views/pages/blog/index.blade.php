<x-layouts.app>
    @include('sections.navbar-section')
    <h1 class="text-3xl font-bold text-center my-6">Blog</h1>

    <div class="max-w-5xl mx-auto">
        <h1 class="text-4xl mb-5 font-bold">Latest Blog</h1>
        {{-- Featured / Latest Post --}}
        @if($latestPost)
            <div class="mb-10 border-b pb-6">
                @if($latestPost->image)
                    <img src="{{ asset('storage/' . $latestPost->image) }}"
                         alt="{{ $latestPost->title }}"
                         class="w-full h-80 object-cover rounded-md mb-4">
                @endif
                <h2 class="text-2xl font-bold mb-2">
                    <a href="{{ route('blog.show', $latestPost->slug) }}" class="hover:underline">
                        {{ $latestPost->title }}
                    </a>
                </h2>
                <p class="text-gray-500 text-sm">
                    By {{ $latestPost->author }} | {{ $latestPost->created_at->format('M d, Y') }}
                </p>
                <p class="mt-2 text-gray-700">
                    {{ Str::limit(strip_tags($latestPost->content), 200) }}
                </p>
            </div>
        @endif

        {{-- Recent Posts --}}
        <h3 class="text-xl font-semibold mb-4">Recent Posts</h3>
        <div class="grid md:grid-cols-2 gap-6">
            @forelse($recentPosts as $blog)
                <div class="border-b border-gray-200 pb-4">
                    @if($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}"
                             alt="{{ $blog->title }}"
                             class="w-full h-48 object-cover rounded-md mb-2">
                    @endif
                    <h4 class="text-lg font-semibold">
                        <a href="{{ route('blog.show', $blog->slug) }}" class="hover:underline">
                            {{ $blog->title }}
                        </a>
                    </h4>
                    <p class="text-gray-500 text-sm">
                        By {{ $blog->author }} | {{ $blog->created_at->format('M d, Y') }}
                    </p>
                    <p class="mt-1 text-gray-700">
                        {{ Str::limit(strip_tags($blog->content), 100) }}
                    </p>
                </div>
            @empty
                <p class="text-center text-gray-500">No recent posts yet.</p>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-6">
            {{ $recentPosts->links() }}
        </div>
    </div>
</x-layouts.app>
