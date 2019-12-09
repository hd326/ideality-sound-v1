<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;

class PageController extends Controller
{
    public function home()
    {
        $posts = Post::paginate(12);
        $tags = Tag::all();
        return view('pages.home', compact('posts', 'tags'));
    }


    public function categories($slug, $subslug = null)
    {
        // The first level slug (parent category)
        $category = Category::where('slug', $slug)->first();
        if($category->parent_id == 0) {
            if(!empty($subslug)) {
                // If there is a second level of a slug, get the subcategories only
                $sub_categories = Category::where('slug', $subslug)->get();
                } else {
                // Else, grab all of the subcategories of the parent id category
                $sub_categories = Category::where('parent_id', $category->id)->get();
            }
        }
        return view('pages.category', compact('category', 'sub_categories'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('pages.post', compact('post'));
    }

    public function tag($tag)
    {
        $tag = Tag::where('name', $tag)->first();
        return view('pages.tag', compact('tag'));
    }
}
