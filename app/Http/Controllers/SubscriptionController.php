<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscription;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions = Subscription::all();
        return view('admin.subscriptions.index', compact('subscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'email' => 'required|email'
        ]);

        $user = Subscription::where('email', $request->email)->first();
        if ($user === NULL) {
            $subscription = new Subscription();
            $subscription->email = $request->email;
            $subscription->confirmation_token = str_random(25);
            $subscription->save();
            return redirect()->back()->with('flash', 'You have successfully subscribed!');
        }
        return redirect()->back()->with('flash', 'You are already registered with our subscription!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        try {
            $subscription = Subscription::where('confirmation_token', request('token'))->first();
            $subscription->delete();
        } catch (\Exception $e) {
            return redirect('/')
            ->with('flash', 'Unknown token.');
        }

        return redirect('/subscribe')->with('flash', 'You have successfully unsubscribed!');
        
    }
}
