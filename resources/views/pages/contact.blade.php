@extends('layouts.frontLayout.front_design')

@section('content')
<div class="secondary-page-header">
        <h1>Contact Us</h1>
    </div>

    <section class="secondary-page-split">
        <main class="secondary-page-column">
            <p class="alt-text" id="feel-free">Just want to say hello or have products you want us to cover? Feel free to drop us a line
                with any questions you may have using the form below.</p>
            <form action="/contact" method="POST">
                @csrf
                @include('partials._honeypot')
                <label class="alt-text" >Your name * (required)</label><br>
                <input type="text" value="{{ old('name') }}" name="name" required autocomplete="name" autofocus> <br><br>
                <label class="alt-text" >Your email * (required)</label><br>
                <input name="email" id="email" type="email" class="text @error('email') is-invalid @enderror" required autocomplete="email"> <br><br>
                <label class="alt-text" >Subject</label><br>
                <input type="text" name="subject" type="text" value="{{ old('subject') }}" required autocomplete="subject"> <br><br>
                <label class="alt-text" >Your message</label><br>
                <textarea name="message">{{ old('message') }}</textarea><br>
                <button type="submit">Submit</button>
            </form>
        </main>
        @include('layouts.frontLayout.front_sidebar')
    </section>
@endsection