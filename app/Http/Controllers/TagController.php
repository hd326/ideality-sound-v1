<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::all();
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
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
            'name' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);

        $tag = Tag::firstOrCreate([
            'name' => request('name'),
            'slug' => request('name'),
            'meta_title' => request('meta_title'),
            'meta_description' => request('meta_description'),
            'meta_keywords' => request('meta_keywords')
            //'slug' => str_slug(request('title'))
        ]);

        return redirect()->action('TagController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::where('id', $id)->first();
        return view('admin.tags.show', compact('tag'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::where('id', $id)->first();
        return view('admin.tags.edit', compact('tag'));
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
        $tag = Tag::find($id);

        $request->validate([
            'name' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keywords' => 'required',
        ]);

        $tag->name = $request->name;
        $tag->meta_title = $request->meta_title;
        $tag->meta_description = $request->meta_description;
        $tag->meta_keywords = $request->meta_keywords;
        $tag->save();

        return redirect()->action('TagController@index');
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
