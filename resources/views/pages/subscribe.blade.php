@extends('layouts.frontLayout.front_design')
@section('description', 'Headphone Reviews, Earphone Reviews, IEM reviews, Amplifier Reviews, DAC Reviews, Audiophile
Reviews')
@section('keywords', 'Headphone Reviews, Earphone Reviews, IEM reviews, Amplifier Reviews, DAC Reviews, Audiophile
Reviews')
@section('content')

<div id="subscribe-header">
    <h1>Subscribe</h1>
</div>

<section id="subscribe-split">
    <main class="subscribe-column">

            @if(Session::has('flash'))
            <p style="font-family: Lato; text-transform: none"><strong>{!! session('flash') !!}</strong></p>
            @endif

        <p id="enter-your">Enter your email address to subscribe and recieve emails when new content is posted!</p>
        <form action="/subscribe" method="POST">
            @csrf
            <p>Your email * (Required)</p>
            <input type="text" name="email" value="{{ old('email') }}">
            {{ $errors->first('email') }}
            <button type="submit">Subscribe</button>
        </form>
    </main>
    @include('layouts.frontLayout.front_sidebar')
</section>

@endsection
