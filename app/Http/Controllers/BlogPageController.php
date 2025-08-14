<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    // show all blog posts
    public function index(){
        $blogs = Blog::latest()->paginate(6);
        return view('pages.blog.index', compact('blogs'));
    }

    public function show($slug){
        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('pages.blog.show', compact('blog'));
    }
}
