<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PostImage;
use Image;

class PostImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $post = Post::where('id', $id)->first();
        $post_images = PostImage::where('post_id', $id)->get();
        return view('admin.postimages.create', compact('post', 'post_images'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        // if($request->hasFile('image')){
        //         $files = $request->file('image');
                
        //         foreach($files as $file){
        //             $image = new PostImage();
        //             $extension = $file->getClientOriginalExtension();
        //             $filename = date('mdYHis') . uniqid() . '.' . $extension;
        //             $original_photo_storage = 'images/original_photos/'.$filename;
        //             $large_photos_storage = 'images/large_photos/'.$filename;
        //             $medium_photos_storage = 'images/medium_photos/'.$filename;
        //             $mobile_photos_storage = 'images/mobile_photos/'.$filename;
        //             $tiny_photos_storage = 'images/tiny_photos/'.$filename;
    
        //             Image::make($file)
        //                 ->save($original_photo_storage, 100)
        //                 ->resize(860, null, function ($constraint) {
        //                     $constraint->aspectRatio();
        //                     })
        //                 ->save($large_photos_storage, 85)
        //                 ->resize(640, null, function ($constraint) {
        //                     $constraint->aspectRatio();
        //                     })
        //                 ->save($medium_photos_storage, 85)
        //                 ->resize(420, null, function ($constraint) {
        //                     $constraint->aspectRatio();
        //                     })
        //                 ->save($mobile_photos_storage, 85)
        //                 ->resize(10, null, function ($constraint) {
        //                     $constraint->aspectRatio();
        //                     })->blur(1)->save($tiny_photos_storage, 85);

        //             $image->image = $filename;
        //             $image->post_id = $request->post_id;
        //             $image->save();
        //         } 
        //     }
        return redirect('/admin/add-images/'.$id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $post_image = PostImage::where('id', $id)->first();

        $original_photo_storage = 'images/original_photos/';
        $large_photos_storage = 'images/large_photos/';
        $medium_photos_storage = 'images/medium_photos/';
        $mobile_photos_storage = 'images/mobile_photos/';
        $tiny_photos_storage = 'images/tiny_photos/';

        if(file_exists($original_photo_storage.$post_image->image)){
            unlink($original_photo_storage.$post_image->image);
        }
        if(file_exists($large_photos_storage.$post_image->image)){
            unlink($large_photos_storage.$post_image->image);
        }
        if(file_exists($medium_photos_storage.$post_image->image)){
            unlink($medium_photos_storage.$post_image->image);
        }
        if(file_exists($mobile_photos_storage.$post_image->image)){
            unlink($mobile_photos_storage.$post_image->image);
        }
        if(file_exists($tiny_photos_storage.$post_image->image)){
            unlink($tiny_photos_storage.$post_image->image);
        }

        PostImage::where('id', $id)->delete();
        return back();
    }
}
