<x-layouts.app>
    <div class="max-w-4xl mx-auto my-8">
        @if($blog->image)
            <img src="{{ asset('storage/' . $blog->image) }}" 
            alt="{{ $blog->title }}" 
            class="w-full h-full object-cover rounded-md mb-4">
        @endif
        <h1 class="text-4xl font-bold mb-2">{{ $blog->title }}</h1>
        <p class="text-gray-500 mb-6">
            By {{ $blog->author }} | {{ $blog->created_at->format('M d, Y') }}
        </p>
        <div class="prose max-w-none">
            {!! $blog->content !!}
        </div>
    </div>
</x-layouts.app>
