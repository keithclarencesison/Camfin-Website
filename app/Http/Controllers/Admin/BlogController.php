<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog; 
use Illuminate\Support\Str;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(10)->appends(['tab' => 'blog']);
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imageUrl = null;

        if($request->hasFile('image')) {
            $uploadedFileUrl = Cloudinary::uploadFile(
                $request->file('image')->getRealPath(),
                ['folder' => 'blogs']
            )->getSecurePath();

            $imageUrl = $uploadedFileUrl;
        }

        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->input('content'),
            'author' => $request->author,
            'image' => $imageUrl,
        ]);

        return redirect()
            ->route('admin.dashboard', ['tab' => 'blog'])
            ->with('success', 'Blog post created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|unique:blogs,slug,' . $id,
            'content' => 'required|string',
        ]);

        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->content = $request->input('content');
        $blog->save();

        return redirect()->route('admin.blog.index')->with('success', 'Blog post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect()->route('admin.dashboard', ['tab' => 'blog'])->with('success', 'Blog post deleted successfully!');
    }
}


