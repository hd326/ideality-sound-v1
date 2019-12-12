<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Post;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Tag::whereHas('posts', function($query){
            $query->where('name', 'blog');
        })->get();
        $tags = Tag::all();
        return view('pages.blogs', compact('blogs', 'tags'));
    }

    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('pages.blog', compact('post'));
    }
}
