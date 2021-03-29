<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index(Request $request)
    {
        $search = request('name');

        if(strlen($search) > 0) {
            $tags = Tag::where('name', 'LIKE', "$search%")
            ->take(5)
            ->get();
        }

        $response = array();

        foreach ($tags as $tag) {
            $response[] = array(
                'id' => $tag->name,
                'text' => $tag->name
            );
        }
        echo json_encode($response);
    }
}
