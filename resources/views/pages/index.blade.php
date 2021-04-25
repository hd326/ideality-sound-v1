@extends('layouts.frontLayout.front_design')
@section('title', 'Home | idealitysound')
@section('description', 'Headphone Reviews, Earphone Reviews, IEM reviews, Amplifier Reviews, DAC Reviews, Audiophile
Reviews')
@section('keywords', 'Headphone Reviews, Earphone Reviews, IEM reviews, Amplifier Reviews, DAC Reviews, Audiophile
Reviews')
@section('content')

<main id="main-page-content">
    @foreach($posts as $post)
    <article class="post-card">
        <a href="{{ url('/'.$post->slug) }}">
            <div class="image-image-container">
                <div class="image-container">
                    <div class="image-container-helper"></div><img src="/storage/{{ $post->image }}" alt="{{ $post->title }} image">
                </div>
            </div>
        </a>
        <h2><a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a></h2>
        <p><i class="fas fa-tags"></i>
        @foreach($post->tags as $tag)@if(\Str::contains($tag->name, ['$']))<a title="View all posts in {{ $tag->name }}" href="/category/budget/{{ $tag->slug }}">{{ $tag->name }}</a>{{', '}}@else{{''}}<a title="View all posts in {{ $tag->name }}" href="/category/tags/{{ $tag->slug }}">{{ $tag->name }}</a>{{', '}}@endif{{''}}@endforeach
            @if ($post->category)
            @if(!empty($post->category->parent['slug']))
            <a href="/category/{{ $post->category->parent['slug'] }}/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            @else
            <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            @endif
            @endif
            <br><i class="fas fa-calendar"></i> {{ $post->created_at->format('F j, Y') }}</p>
        <p>{{ substr(strip_tags($post->body), 0, 125) }} {{ strlen($post->body) > 125 ? "..." : "" }}</p>
        <hr>
    </article>
    @endforeach
</main>
<div class="d-flex justify-content-center">{{ $posts->links() }}</div>

@endsection
