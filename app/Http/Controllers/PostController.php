<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewPostMail;
use App\Post;
use App\Category;
use App\Tag;
use App\Subscription;
use App\PostTag;
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
        $budgets = Category::with('children')->where('name', 'Budget')->get();
        return view('admin.posts.create', compact('budgets','categories', 'tags'));
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
            'category_id' => 'required',
            'image' => 'required|file|image|mimes:jpeg,jpg,png,gif,webp|max:25000',
            //'tonal_balance_neutrality' => 'required',
            //'price_performance' => 'required',
            //'sound_fidelity' => 'required',
            //'musicality' => 'required',
            //'build_quality' => 'required',
            //'bass_extension' => 'required',
            //'bass_balance' => 'required',
            //'lower_midrange_balance' => 'required',
            //'midrange_proper_balance' => 'required',
            //'upper_midrange_balance' => 'required',
            //'treble_balance' => 'required',
            //'treble_extension' => 'required',
            //'bass_control' => 'required',
            //'tone_density' => 'required',
            //'macro_dynamics' => 'required',
            //'micro_dynamics' => 'required',
            //'soundstage_width' => 'required',
            //'soundstage_depth' => 'required',
            //'resolution' => 'required',
            //'clarity' => 'required',
            //'score' => 'required'
        ]);



        $imgpath = request()->file('image')->store('posts', 'public');

        $post = new Post();
        $post->user_id = auth()->id();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->meta_keywords = $request->meta_keywords;
        $post->category_id = $request->category_id;
        $post->tonal_balance_neutrality = $request->tonal_balance_neutrality;
        $post->price_performance = $request->price_performance;
        $post->sound_fidelity = $request->sound_fidelity;
        $post->musicality = $request->musicality;
        $post->build_quality = $request->build_quality;
        $post->bass_extension = $request->bass_extension;
        $post->bass_balance = $request->bass_balance;
        $post->lower_midrange_balance = $request->lower_midrange_balance;
        $post->midrange_proper_balance = $request->midrange_proper_balance;
        $post->upper_midrange_balance = $request->upper_midrange_balance;
        $post->treble_balance = $request->treble_balance;
        $post->treble_extension = $request->treble_extension;
        $post->bass_control = $request->bass_control;
        $post->tone_density = $request->tone_density;
        $post->macro_dynamics = $request->macro_dynamics;
        $post->micro_dynamics = $request->micro_dynamics;
        $post->soundstage_width = $request->soundstage_width;
        $post->soundstage_depth = $request->soundstage_depth;
        $post->resolution = $request->resolution;
        $post->clarity = $request->clarity;
        $post->score = $request->score;
        $post->image = $imgpath;

        // if($request->hasFile('image')){
        //     if($request->file('image')->isValid()){
        //         // Resize Image code
        //         $extension = $request->file('image')->getClientOriginalExtension();
        //         $filename = date('mdYHis') . uniqid() . '.' . $extension;
                
        //         $original_photo_storage = 'images/original_photos/'.$filename;
        //         $large_photos_storage = 'images/large_photos/'.$filename;
        //         $medium_photos_storage = 'images/medium_photos/'.$filename;
        //         $mobile_photos_storage = 'images/mobile_photos/'.$filename;
        //         $tiny_photos_storage = 'images/tiny_photos/'.$filename;

        //         Image::make($request->file('image'))
        //             ->save($original_photo_storage, 100)
        //             ->resize(860, null, function ($constraint) {
        //                 $constraint->aspectRatio();
        //                 })
        //             ->save($large_photos_storage, 85)
        //             ->resize(640, null, function ($constraint) {
        //                 $constraint->aspectRatio();
        //                 })
        //             ->save($medium_photos_storage, 85)
        //             ->resize(420, null, function ($constraint) {
        //                 $constraint->aspectRatio();
        //                 })
        //             ->save($mobile_photos_storage, 85)
        //             ->resize(10, null, function ($constraint) {
        //                 $constraint->aspectRatio();
        //                 })->blur(1)->save($tiny_photos_storage, 85);

        //         $post->image = $filename;
        //     }
        // }

        if (isset($request->subscribers)){
            $subscriptions = Subscription::select('email')->get();
            $subscription_tokens = Subscription::select('confirmation_token')->get();
            //$subscription_encoded = json_decode($subscription);
            //Mail::to($subscriptions)->send(new NewPostMail($subscription_encoded));
            foreach($subscription_tokens as $subscription_token) {
                Mail::to($subscriptions)->send(new NewPostMail($subscription_token->confirmation_token, $post));
                //dd($subscription_token->confirmation_token);
                sleep(5);
            }
        } 

        $post->save();

        if ($tagsNames = $request->tags) {
            foreach($tagsNames as $tagName){
                if (!\Str::contains($tagName, ['$'])) {
                    if (!Tag::where('name', $tagName)->exists()) {
                        Tag::firstOrCreate(['name' => $tagName, 'slug' => $tagName])->save();
                    }
                }
            }
            $tags = Tag::whereIn('name', $tagsNames)->get()->pluck('id');
            $post->tags()->sync($tags);
        }
        //$post->tags()->sync($request->tags, false);

        return redirect()->action('PostController@edit', ['id' => $post->id]);
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
        $budgets = Category::with('children')->where('name', 'Budget')->get();
        $tags = PostTag::where('post_id', $post->id)->get();
        $categories = Category::all();
        return view('admin.posts.edit', compact('budgets', 'post', 'categories', 'tags'));
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

        if (!empty(request()->file('image'))) {
            $imgpath = request()->file('image')->store('posts', 'public');
        }
    
        $post->user_id = auth()->id();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->slug = $request->slug;
        $post->meta_title = $request->meta_title;
        $post->meta_description = $request->meta_description;
        $post->meta_keywords = $request->meta_keywords;
        $post->category_id = !empty($request->category_id) ? $request->category_id : NULL;
        $post->tonal_balance_neutrality = $request->tonal_balance_neutrality;
        $post->price_performance = $request->price_performance;
        $post->sound_fidelity = $request->sound_fidelity;
        $post->musicality = $request->musicality;
        $post->build_quality = $request->build_quality;
        $post->bass_extension = $request->bass_extension;
        $post->bass_balance = $request->bass_balance;
        $post->lower_midrange_balance = $request->lower_midrange_balance;
        $post->midrange_proper_balance = $request->midrange_proper_balance;
        $post->upper_midrange_balance = $request->upper_midrange_balance;
        $post->treble_balance = $request->treble_balance;
        $post->treble_extension = $request->treble_extension;
        $post->bass_control = $request->bass_control;
        $post->tone_density = $request->tone_density;
        $post->macro_dynamics = $request->macro_dynamics;
        $post->micro_dynamics = $request->micro_dynamics;
        $post->soundstage_width = $request->soundstage_width;
        $post->soundstage_depth = $request->soundstage_depth;
        $post->resolution = $request->resolution;
        $post->clarity = $request->clarity;
        $post->score = $request->score;
        
        if(!empty($imgpath)) {
            $post->image = $imgpath;
        }
        $post->save();

        if ($tagsNames = $request->tags) {
            foreach($tagsNames as $tagName){
                if (!\Str::contains($tagName, ['$'])) {
                    if (!Tag::where('name', $tagName)->exists()) {
                        Tag::firstOrCreate(['name' => $tagName, 'slug' => $tagName])->save();
                    }
                }
            }
            $tags = Tag::whereIn('name', $tagsNames)->get()->pluck('id');
            $post->tags()->sync($tags);
        }
        //$post->tags()->sync($request->tags, true);

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
        $post = Post::find($id);
        $post->delete();
        return back();
    }
}
