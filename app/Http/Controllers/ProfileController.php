<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = User::where('id', auth()->id())->first();
        return view('admin.profiles.show', [
            'user' => $user
        ]);
    }

    public function update($id)
    {
        $user = User::find($id)->first();
        if (!empty(request()->file('avatar'))) {
            $user->update([
                'avatar_path' => request()->file('avatar')->store('avatars', 'public')
            ]);
        }

        $user->update(['signature' => request('signature')]);

        return back();
    }
}
