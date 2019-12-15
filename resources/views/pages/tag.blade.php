@extends('layouts.frontLayout.front_design')

@section('content')
<div id="title">
    <h1>{{ $tag->name }}</h1>
</div>
<div id="main">
    <div id="main-content-holder">
        <div id="main-content">
            @foreach($tag->posts as $post)
            <div class="post-card">
                <a href="{{ url('/'.$post->slug) }}">
                    <div class="image-container">
                        <div class="image-container-helper"></div><img src="{{ asset('images/yulongstack.JPG') }}">
                    </div>
                </a>
                <h2><a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a></h2>
                <p><i class="fas fa-tags"></i> $1000-$5000, Desktop Gear, Review<br><i class="fas fa-calendar"></i>
                    {{ $post->created_at->format('F j, Y') }}</p>
                <p>{{ substr(strip_tags($post->body), 0, 125) }} {{ strlen($post->body) > 125 ? "..." : "" }}</p>
                <hr>
            </div>
            @endforeach
        </div>
        <div id="side-content">
            @include('layouts.frontLayout.front_sidebar')
        </div>
    </div>
</div>
@endsection
