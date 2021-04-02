@extends('layouts.frontLayout.front_design')

@section('content')
<div id="title">
    <p>Search Results For:</p>
    <h1>" {{ $q }} "</h1>
</div>
<section id="main">
    <div id="main-content-holder">
        <main id="main-content">
            <div id="search">
            @if(!empty($posts))
            @foreach($posts as $post)

            <div class="search-card">
                <div class="search-image">
                    <img src="/storage/{{ $post->image }}" alt="{{ $post->title }}'s image">
                </div>
                <div class="search-details">
                    <h2><a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a></h2>
                    <p>{{ substr(strip_tags($post->body), 0, 200) }} {{ strlen($post->body) > 200 ? "..." : "" }}</p>
                    <p><a href="{{ url('/'.$post->slug) }}">Read More</a></p>
                </div>
                {{-- <a href="{{ url('/'.$post->slug) }}">
                    <div class="image-image-container">
                            <div class="image-container">
                                <div class="image-container-helper"></div><img src="/storage/{{ $post->image }}">
                            </div>
                    </div>
                </a>
                <h2><a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a></h2>
                <p><i class="fas fa-tags"></i> <span>@foreach($post->tags as
                        $tag){{ $loop->first ? '' : ', ' }}<a title="View all posts in {{ $tag->name }}"
                            href="/tags/{{$tag->name}}">{{ $tag->name }}</a>@endforeach</span><br><i class="fas fa-calendar"></i>
                    {{ $post->created_at->format('F j, Y') }}</p>
                <p>{{ substr(strip_tags($post->body), 0, 125) }} {{ strlen($post->body) > 125 ? "..." : "" }}</p>
                <hr> --}}
                
            </div>
            <hr style="">
            @endforeach
            @endif
        </div>

        </main>
        <aside id="side-content">
            @include('layouts.frontLayout.front_sidebar')
        </aside>

</div>
</section>
@if(!empty($posts))
<div class="d-flex justify-content-center">{{ $posts->links() }}</div>
@endif
@endsection
