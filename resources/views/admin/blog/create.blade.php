<x-layouts.app>

  <div class="create-blog-container w-full flex justify-center">
    <div class="create-blog content w-3/4 p-10 bg-gray-200 my-20 rounded-2xl">
      <h1 class="text-2xl font-bold mb-6">Create New Blog Post</h1>

      @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
          <ul>
            @foreach ($errors->all() as $error)
              <li>- {{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
          <label for="title" class="block mb-1 font-semibold">Title</label>
          <input
            type="text"
            name="title"
            id="title"
            class="w-full border border-gray-300 p-2 rounded"
            value="{{ old('title') }}"
            required
          />
        </div>

        <div class="mb-4">
          <label for="author" class="block text-sm font-semibold">Author</label>
          <input type="text" name="author" id="author" class="mt-1 border block w-full border-gray-300 rounded p-2" required>
        </div>

        <div class="mb-4">
          <label for="content" class="block mb-1 font-semibold">Content</label>
          <textarea
            name="content"
            id="content"
            rows="6"
            class="w-full border border-gray-300 p-2 rounded"
            required
          >{{ old('content') }}</textarea>
        </div>

        <div class="mb-4">
          <label for="image" class="block mb-1 font-semibold">Header Image: </label>
          <input type="file" name="image" id="image" accept="image/*" class="file-input file-input-info" />

        </div>

        <button
          type="submit"
          class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700"
        >
          Publish
        </button>
      </form>
    </div>
    
  </div>
    
</x-layouts.app>
