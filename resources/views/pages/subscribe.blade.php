@extends('layouts.frontLayout.front_design')
@section('description', 'Headphone Reviews, Earphone Reviews, IEM reviews, Amplifier Reviews, DAC Reviews, Audiophile
Reviews')
@section('keywords', 'Headphone Reviews, Earphone Reviews, IEM reviews, Amplifier Reviews, DAC Reviews, Audiophile
Reviews')
@section('content')

<div class="secondary-page-header">
    <h1>Subscribe</h1>
</div>

<section class="secondary-page-split">
    <main class="secondary-page-column">

            @if(Session::has('flash'))
            <p style="font-family: Lato; text-transform: none"><strong>{!! session('flash') !!}</strong></p>
            @endif

        <p id="enter-your">Enter your email address to subscribe and recieve emails when new content is posted!</p>
        <form action="/subscribe" method="POST">
            @csrf
            <p class="subscribe" >Your email * (Required)</p>
            <input class="subscribe" type="email" name="email" value="{{ old('email') }}">
            {{ $errors->first('email') }}
            <button class="subscribe" type="submit">Subscribe</button>
        </form>
    </main>
    @include('layouts.frontLayout.front_sidebar')
</section>

@endsection
