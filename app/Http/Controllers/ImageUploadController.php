<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Session;
use View;

class ImageUploadController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'file|image|mimes:jpeg,png,gif,webp|max:20000'
        ]);

        if ($validator->fails()) {
            return false;
            //Session::flash('flash', 'File has exceeded upload limit.');
            //return View::make('partials._flash-messages');
        } elseif ($validator->passes()) {
            $imgpath = request()->file('file')->store('images', 'public');
            return response()->json(['location' => '/storage/' . $imgpath]);
        }
    }
}
