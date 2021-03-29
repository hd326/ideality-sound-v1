<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\Tag;
use App\Comment;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->redirectTo = url()->previous();
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function redirectTo()
    {
        return url()->previous();
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function showRegistrationForm()
    {
        if(!session()->has('url.intended'))
        {
            session(['url.intended' => url()->previous()]);
        }
        $latest = Comment::orderBy('id', 'desc')->take(3)->get();
        $latestSideCol = Comment::orderBy('id', 'desc')->take(10)->get();
        $tags = Tag::withCount('posts')->orderBy('posts_count', 'desc')->take(10)->get();
        return view('auth.register', compact('tags', 'latest', 'latestSideCol'));
    }


    public function redirectPath()
    {
        return redirect()->intended();
    }

    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect('/register')
                ->withErrors($validator)
                ->withInput();
        }
        
        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);
        // before the below below
        return redirect()->intended();;
        //redirect()->back();

        //return $this->registered($request, $user)
        //                ?: redirect($this->redirectPath());
        //                //?: redirect()->action('RegisterController@showRegistrationForm');
    }


    protected function registered(Request $request, $user)
    {
        //if ($request->has('forums')) {
        //    return redirect()->route('forums');
        //}
        //if ($request->has('main')) {
        //    return redirect()->route('home');
        //}
        return redirect()->intended();
    }
}
