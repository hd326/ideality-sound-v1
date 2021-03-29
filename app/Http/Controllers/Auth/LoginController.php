<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Tag;
use App\Comment;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        if(!session()->has('url.intended'))
        {
            session(['url.intended' => url()->previous()]);
        }
        $latest = Comment::orderBy('id', 'desc')->take(3)->get();
        $latestSideCol = Comment::orderBy('id', 'desc')->take(10)->get();
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        return view('auth.login', compact('tags', 'latest', 'latestSideCol'));
    }

    public function username()
    {
        $field = (filter_var(request()->identity, FILTER_VALIDATE_EMAIL) || !request()->email) ? 'email' : 'name';
        request()->merge([$field => request()->identity]);
        return $field;
    }
}
