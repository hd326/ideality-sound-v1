@extends('layouts.frontLayout.front_design')

@section('content')

<div id="title">
    <h1>Login</h1>
</div>
<section id="main">
    <div id="main-content-holder">
        <main id="main-content">
        <form autocomplete="off" action="/login" method="POST">
            @csrf
            <label class="registration" for="identity">Your name or email address:<label><br>
            <input class="registration text @error('identity') is-invalid @enderror" id="identity" type="text"
            name="identity" value="{{ old('identity') }}" required autocomplete="email" autofocus><br>
            @error('identity')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
            <label class="registration" for="password">Password<label><br>
            <input class="registration @error('password') is-invalid @enderror" type="password" name="password"  required autocomplete="new-password"><br>
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            @if(count($errors))
            <ul style="margin-top: 10px;" class="alert alert-danger">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
            <br>
            <p style="color: gray;">Forgot your password?</p>
                        <input class="" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                        <br>
            <button class="registration" type="submit">Login</button>
        </form>
        </main>
        <aside id="side-content">
            @include('layouts.frontLayout.front_sidebar')
        </aside>
    </div>
</section>
@endsection
