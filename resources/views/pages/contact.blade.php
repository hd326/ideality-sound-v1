@extends('layouts.frontLayout.front_design')

@section('content')
<div id="contact-us-header">
        <h1>Contact Us</h1>
    </div>

    <section id="contact-us-split">
        <main class="contact-us-column">
            <p id="feel-free">Just want to say hello or have products you want us to cover? Feel free to drop us a line
                with any questions you may have using the form below.</p>
            <p>Your name * (required)</p>
            <input type="text" name="name">
            <p>Your email * (required)</p>
            <input type="text" name="email">
            <p>Subject</p>
            <input type="text" name="subject">
            <p>Your message</p>
            <textarea name="message"></textarea><br>
            <button type="submit">Submit</button>
        </main>
        @include('layouts.frontLayout.front_sidebar')
    </section>
@endsection