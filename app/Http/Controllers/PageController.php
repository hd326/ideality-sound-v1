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
        $posts = Post::paginate(12);

        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $latest = Comment::orderBy('id', 'desc')->take(3)->get();
        $latestSideCol = Comment::orderBy('id', 'desc')->take(10)->get();
        return view('pages.index', compact('posts', 'tags', 'latest', 'latestSideCol'));
    }

    public function about()
    {
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $latest = Comment::orderBy('id', 'desc')->take(3)->get();
        $latestSideCol = Comment::orderBy('id', 'desc')->take(10)->get();
        return view('pages.about', compact('tags', 'latest', 'latestSideCol'));
    }

    public function privacy()
    {
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $latest = Comment::orderBy('id', 'desc')->take(3)->get();
        $latestSideCol = Comment::orderBy('id', 'desc')->take(10)->get();
        return view('pages.privacy', compact('tags', 'latest', 'latestSideCol'));
    }

    public function disclaimer()
    {
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $latest = Comment::orderBy('id', 'desc')->take(3)->get();
        $latestSideCol = Comment::orderBy('id', 'desc')->take(10)->get();
        return view('pages.disclaimer', compact('tags', 'latest', 'latestSideCol'));
    }

    public function contact()
    {
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $latest = Comment::orderBy('id', 'desc')->take(3)->get();
        $latestSideCol = Comment::orderBy('id', 'desc')->take(10)->get();
        return view('pages.contact', compact('tags', 'latest', 'latestSideCol'));
    }

    // Only to display the page, the actual sign-up is in SubscriptionController

    public function subscribe(Request $request)
    {
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $latest = Comment::orderBy('id', 'desc')->take(3)->get();
        $latestSideCol = Comment::orderBy('id', 'desc')->take(10)->get();
        return view('pages.subscribe', compact('tags', 'latest', 'latestSideCol'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $latest = Comment::orderBy('id', 'desc')->take(3)->get();
        $latestSideCol = Comment::orderBy('id', 'desc')->take(10)->get();
        $meta_title = $category->meta_title;
        $meta_description = $category->meta_description;
        $meta_keywords = $category->meta_keywords;
        return view('pages.category', compact('category', 'tags', 'latest', 'latestSideCol', 'meta_title', 'meta_description', 'meta_keywords'));
    }


    public function subcategory($slug, $subslug = null)
    {
        // The first level slug (parent category)
        $category = Category::where('slug', $slug)->first();
        
        if($category->parent_id == 0) {
            if(!empty($subslug)) {
                // If there is a second level of a slug, get the subcategories only
                $sub_category = Category::where('slug', $subslug)->first();
            }
        }
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $latest = Comment::orderBy('id', 'desc')->take(3)->get();
        $latestSideCol = Comment::orderBy('id', 'desc')->take(10)->get();
        return view('pages.subcategory', compact('sub_category', 'tags', 'latest', 'latestSideCol'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $previous = Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
        $next = Post::where('id', '>', $post->id)->orderBy('id')->first();
        $reviews = Tag::where('name', 'reviews')->first();
        $related = $reviews->posts->take(2);
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $latest = Comment::orderBy('id', 'desc')->take(3)->get();
        $latestSideCol = Comment::orderBy('id', 'desc')->take(10)->get();
        foreach($post->images as $image){
            $images[] = $image->image;
        }
        if(!empty($images[0])){
            $mainImage = $images[0];
        } else {
            $mainImage = null;
        }
        
        return view('pages.post', compact('post', 'tags', 'previous', 'next', 'related', 'latest', 'latestSideCol', 'mainImage'));
    }

    public function tag($tag)
    {
        $tag = Tag::where('name', $tag)->first();
        $posts = $tag->posts()->paginate(12);
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $latest = Comment::orderBy('id', 'desc')->take(3)->get();
        $latestSideCol = Comment::orderBy('id', 'desc')->take(10)->get();
        return view('pages.tag', compact('tag', 'tags', 'posts', 'latest', 'latestSideCol'));
    }

    public function search(Request $request)
    {
        $q = $request->q;
        $posts = Post::where('title', 'LIKE', '%' . $q . '%')->orWhere('body', 'LIKE', '%' . $q . '%')->get();
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        $latest = Comment::orderBy('id', 'desc')->take(3)->get();
        $latestSideCol = Comment::orderBy('id', 'desc')->take(10)->get();
        if(count($posts) > 0) {
            return view('pages.search', compact('posts', 'q', 'tags', 'latest', 'latestSideCol'));
        } else {
            return view('pages.search', compact('tags', 'q', 'latest', 'latestSideCol'))->withMessage('No results found. Please try to search again!');
        }
    }
}
