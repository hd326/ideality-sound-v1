@extends('layouts.frontLayout.front_design')

@section('content')
<div id="contact-us-header">
        <h1>Contact Us</h1>
    </div>

    <div id="contact-us-split">

        <div class="contact-us-column">
            <p id="feel-free">Just want to say hello or have products you want us to cover? Feel free to drop us a line
                with any questions you may have using the form below.</p>
            <p>YOUR NAME * (REQUIRED)</p>
            <input type="text" name="name">
            <p>YOUR EMAIL * (REQUIRED)</p>
            <input type="text" name="name">
            <p>SUBJECT</p>
            <input type="text" name="name">
            <p>YOUR MESSAGE</p>
            <textarea></textarea><br>
            <button>Submit</button>
        </div>
        <div class="contact-us-column">
            <div id="sponsors">
                <div class="sponsor">Sponsor here</div>
                <div class="sponsor">Sponsor here</div>
                <div class="sponsor">Sponsor here</div>
            </div>
        </div>
    </div>
@endsection