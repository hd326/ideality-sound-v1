<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Tag;
use App\Comment;

class PageController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(12);
        return view('pages.index', compact('posts'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function privacy()
    {
        return view('pages.privacy');
    }

    public function disclaimer()
    {
        return view('pages.disclaimer');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    // Only to display the page, the actual sign-up is in SubscriptionController

    public function subscribe(Request $request)
    {
        return view('pages.subscribe');
    }

    public function all()
    {
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $posts = Post::orderBy('created_at', 'desc')->paginate(12);
        return view('pages.all', compact('posts'));
    }

    public function budget($tag)
    {
        $tag = Tag::where('slug', $tag)->first();
        $posts = Post::whereHas('tags', function($query) use ($tag) { return $query->where('slug', $tag); })->orderBy('created_at', 'desc')->paginate(12);
        return view('pages.budget', compact('posts', 'tag'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();

        foreach ($category->categories as $subcategory) {
                $subcategoryIds[] = $subcategory->id;
        }

        $posts = Post::whereIn('category_id', $subcategoryIds)->orderBy('created_at', 'desc')->paginate(12);
        return view('pages.category', compact('posts', 'category'));
    }


    public function subcategory($slug, $subslug = null)
    {
        // The first level slug (parent category)
        $category = Category::where('slug', $slug)->first();
        if($category->parent_id == 0) {
            if(!empty($subslug)) {
                // If there is a second level of a slug, get the subcategories only
                $sub_category = Category::where('slug', $subslug)->first();
                $posts = Post::where('category_id', $sub_category->id)->orderBy('created_at', 'desc')->paginate(12);
            }
        }
        return view('pages.subcategory', compact('posts', 'sub_category'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $previous = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $next = Post::where('id', '>', $post->id)->orderBy('id')->first();
        $reviews = Tag::where('slug', 'review')->first();
        $related = $reviews->posts->where('id', '!=', $post->id)->take(2);
        return view('pages.post', compact('post', 'previous', 'next', 'related'));
    }

    public function canjam()
    {
        $posts = Post::whereHas('tags', function($query) { return $query->where('slug', 'canjam-reports'); })->orderBy('created_at', 'desc')->paginate(12);
        $tag = Tag::where('slug', 'canjam-reports')->first();
        return view('pages.budget', compact('tag', 'posts'));
    }

    public function tag($tag)
    {
        $tag = Tag::where('slug', $tag)->first();
        $posts = Post::whereHas('tags', function($query) use ($tag) { return $query->where('slug', $tag->slug); })->orderBy('created_at', 'desc')->paginate(12);
        return view('pages.tag', compact('tag', 'posts'));
    }

    public function search(Request $request)
    {
        $q = $request->q;
        $posts = Post::where('title', 'LIKE', '%' . $q . '%')->orWhere('body', 'LIKE', '%' . $q . '%')->orderBy('created_at', 'desc')->paginate(12);
        if(count($posts) > 0) {
            return view('pages.search', compact('posts', 'q', ));
        } else {
            return view('pages.search', compact('q', ))->withMessage('No results found. Please try to search again!');
        }
    }
}
