<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminProfileController extends Controller
{
    public function show(Request $request)
    {
        $user = User::where('id', auth()->id())->first();
        return view('admin.profiles.show', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
    {

        //\DB::connection()->enableQueryLog();
        $user = User::find($id);
        if (!empty(request()->file('avatar'))) {
            $user->avatar_path = $request->file('avatar')->store('avatars', 'public');
        }

        $user->signature = $request->input('signature');

        $user->save();

        //$queries = \DB::getQueryLog();

        //dd($queries);

        return redirect()->action('AdminProfileController@show', ['id' => $user->id]);
    }
}
