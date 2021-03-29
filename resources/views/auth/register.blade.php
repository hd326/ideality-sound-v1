@extends('layouts.frontLayout.front_design')

@section('content')

<div id="title">
    <h1>Register</h1>
</div>
<section id="main">
    <div id="main-content-holder">
        <main id="main-content">
        <form autocomplete="off" action="/register" method="POST">
            @csrf
            <label class="registration" for="name">User name * (required)<label><br>
            <input class="registration text @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus><br>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <br>
            <label class="registration" for="email">Your email * (required)<label><br>
            <input class="registration text @error('email') is-invalid @enderror" type="text" name="email" value="{{ old('email') }}" required autocomplete="email"><br>
            @error('email')
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
            <br>
            <label class="registration" for="password">Confirm Password<label><br>
            <input class="registration" id="password-confirm" type="password" name="password_confirmation" required
            autocomplete="new-password"><br>
            <button class="registration" type="submit">Register</button>
        </form>
        </main>
        <aside id="side-content">
            @include('layouts.frontLayout.front_sidebar')
        </aside>
    </div>
</section>
@endsection
