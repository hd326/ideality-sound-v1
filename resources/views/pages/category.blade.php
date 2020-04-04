@extends('layouts.frontLayout.front_design')

@section('content')
<div id="title">
    <h1>{{ $category->name }}</h1>
</div>
<div id="main">
    <div id="main-content-holder">
        <main id="main-content">
            <div id="posts">
            @foreach($category->categories as $subcategory)
            @foreach($subcategory->posts as $post)
            
            <div class="post-card">
                <a href="{{ url('/'.$post->slug) }}">
                    <div class="image-image-container">
                        <div class="image-container">
                            <div class="image-container-helper"></div><img src="{{ asset('images/yulongstack.JPG') }}">
                        </div>
                    </div>
                </a>
                <h2><a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a></h2>
                <p><i class="fas fa-tags"></i><span>@foreach($post->tags as
                        $tag){{ $loop->first ? '' : ', ' }}<a title="View all posts in {{ $tag->name }}"
                            href="/tags/{{$tag->name}}">{{ $tag->name }}</a>@endforeach</span><br><i
                        class="fas fa-calendar"></i>
                    {{ $post->created_at->format('F j, Y') }}</p>
                <p>{{ substr(strip_tags($post->body), 0, 125) }} {{ strlen($post->body) > 125 ? "..." : "" }}</p>
                <hr>
            </div>

            @endforeach
            @endforeach
        </div>
        </main>
        <aside id="side-content">
            @include('layouts.frontLayout.front_sidebar')
        </aside>
    </div>
</div>
@endsection
