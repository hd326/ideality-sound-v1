<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Session;

class AdminController extends Controller
{
    public function loginPage()
    {
        return view('admin.admin_login');
    }

    public function loginAction(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'admin' => 1])){
            return redirect()->action('AdminController@loginDashboard');
        } else {
            return redirect()->action('AdminController@loginPage')->with('flash_message_error', 'Your credentials could not be matched.');
        }
    }

    public function loginDashboard(){
        return view('admin.dashboard');
    }
}
