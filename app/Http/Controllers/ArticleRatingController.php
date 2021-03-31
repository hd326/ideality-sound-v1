<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class ArticleRatingController extends Controller
{
    public function store(Post $post)
    {
        request()->validate([
            'rating' => ['required', 'in:1,2,3,4,5']
        ]);

        $post->rate(request('rating'));
    }
}
