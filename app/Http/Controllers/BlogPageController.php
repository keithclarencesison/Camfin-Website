<?php

namespace App\Http\Controllers;

use App\Models\Blog;

use Illuminate\Http\Request;

class BlogPageController extends Controller
{
    // show all blog posts
    public function index(){
        $latestPost = Blog::latest()->first();
        
        $recentPosts = Blog::where('id', '!=', $latestPost->id)
        ->latest()
        ->paginate(6);

        return view('pages.blog.index', compact('latestPost', 'recentPosts'));
    }

    public function show($slug){

        $blog = Blog::where('slug', $slug)->firstOrFail();
        return view('pages.blog.show', compact('blog'));
        
    }
    
}
