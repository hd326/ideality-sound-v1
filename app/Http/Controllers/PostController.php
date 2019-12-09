<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use Image;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create', compact('categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'slug' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'category_id' => 'required'
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->meta_keywords = $request->meta_keywords;
        $post->category_id = $request->category_id;

        if($request->hasFile('image')){
            if($request->file('image')->isValid()){
                // Resize Image code
                $extension = $request->file('image')->getClientOriginalExtension();
                $filename = date('mdYHis') . uniqid() . '.' . $extension;
                
                $original_photo_storage = 'images/original_photos/'.$filename;
                $large_photos_storage = 'images/large_photos/'.$filename;
                $medium_photos_storage = 'images/medium_photos/'.$filename;
                $mobile_photos_storage = 'images/mobile_photos/'.$filename;
                $tiny_photos_storage = 'images/tiny_photos/'.$filename;

                Image::make($request->file('image'))
                    ->save($original_photo_storage, 100)
                    ->resize(860, null, function ($constraint) {
                        $constraint->aspectRatio();
                        })
                    ->save($large_photos_storage, 85)
                    ->resize(640, null, function ($constraint) {
                        $constraint->aspectRatio();
                        })
                    ->save($medium_photos_storage, 85)
                    ->resize(420, null, function ($constraint) {
                        $constraint->aspectRatio();
                        })
                    ->save($mobile_photos_storage, 85)
                    ->resize(10, null, function ($constraint) {
                        $constraint->aspectRatio();
                        })->blur(1)->save($tiny_photos_storage, 85);

                $post->image = $filename;
            }
        }

        $post->save();

        $post->tags()->sync($request->tags, false);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('id', $id)->first();
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $tags = Tag::all();
        $categories = Category::all();
        return view('admin.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'slug' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
            'category_id' => 'required'
        ]);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->meta_keywords = $request->meta_keywords;
        $post->category_id = $request->category_id;
        $post->save();

        $post->tags()->sync($request->tags, false);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}
