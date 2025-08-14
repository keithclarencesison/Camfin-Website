<x-layouts.app>

    <div class="navbar bg-gray-200 border-b-1 border-gray-400 shadow-sm">
        <div class="flex-1">
            <h1 class="text-4xl font-bold">Blog</h1>
        </div>
        <div class="flex-none">
            <a href="{{ route('admin.blog.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                + New Post
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="mb-4 p-4 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif

    <div class="w-full flex flex-col justify-center">
        <table class="w-3/4 mt-20 self-center border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-300 p-2 text-left">Title</th>
                    <th class="border border-gray-300 p-2 text-left">Created At</th>
                    <th class="border border-gray-300 p-2 text-left">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($blogs as $blog)
                    <tr>
                        <td class="border border-gray-300 p-2">{{ $blog->title }}</td>
                        <td class="border border-gray-300 p-2">{{ $blog->created_at->format('M d, Y') }}</td>
                        <td class="border border-gray-300 p-2">
                            <a href="{{ route('admin.blog.edit', $blog->id) }}" class="text-blue-600 hover:underline mr-2">Edit</a>

                            <form action="{{ route('admin.blog.destroy', $blog->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="border border-gray-300 p-4 text-center">No blog posts found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="self-center mt-4 w-3/4">
            {{ $blogs->links() }} {{-- Laravel pagination links --}}
        </div>
    </div>
    

    


</x-layouts.app>
