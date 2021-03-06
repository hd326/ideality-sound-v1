<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = User::where('id', auth()->id())->first();
        return view('profiles.show', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {

        $user = User::find($id);
        if (!empty(request()->file('avatar'))) {
            $user->avatar_path = $request->file('avatar')->store('avatars', 'public');
        }

        $user->save();

        return redirect()->action('ProfileController@show', ['id' => $user->id]);
    }
}
