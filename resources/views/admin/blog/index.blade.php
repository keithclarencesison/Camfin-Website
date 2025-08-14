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
    <h1 class="text-4xl font-bold mt-10 ml-10">Manage Blogs</h1>
    <div class="w-full flex flex-col justify-center">
        <div class="overflow-x-auto self-center w-3/4 mt-20">
             <table class="table table-zebra">

                 <thead>
                    <tr class="">
                        <th class=""></th>
                        <th class="p-2 text-left">Title</th>
                        <th class="p-2 text-left">Author</th>
                        <th class="p-2 text-left">Created At</th>
                        <th class=""></th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($blogs as $blog)
                            <tr class="">
                                <th>
                                <label>
                                    <input type="checkbox" class="checkbox" />
                                </label>
                            </th>
                            <td class="p-2">{{ $blog->title }}</td>
                            <td class="p-2">{{ $blog->author }}</td>
                            <td class="p-2">{{ $blog->created_at->format('M d, Y') }}</td>
                            <td class="text-center">
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
                            <td colspan="3" class="text-center">No blog posts found.</td>
                        </tr>
                    @endforelse
                </tbody>

             </table>
        </div>
       
        <div class="self-center mt-4 w-3/4">
            {{ $blogs->links() }} {{-- Laravel pagination links --}}
        </div>
    </div>


    


</x-layouts.app>
