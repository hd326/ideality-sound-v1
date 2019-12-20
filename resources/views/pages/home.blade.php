@extends('layouts.frontLayout.front_design')
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
                    <div class="image-container-helper"></div><img src="images/yulongstack.JPG">
                </div>
            </div>
        </a>
        <h2><a href="{{ url('/'.$post->slug) }}">{{ $post->title }}</a></h2>
        <p><i class="fas fa-tags"></i>
            @foreach($post->tags as
            $tag)<a title="View all posts in {{ $tag->name }}"
                href="/tags/{{$tag->name}}">{{ $tag->name }}</a>, @endforeach
                @if($post->price)
                    <a href="category/budget/{{ $post->price }}">{{ $post->price }}</a>
                @endif
                <a href="/category/{{ $post->category->parent['slug'] }}/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            <br><i class="fas fa-calendar"></i> {{ $post->created_at->format('F j, Y') }}</p>
        <p>{{ substr(strip_tags($post->body), 0, 125) }} {{ strlen($post->body) > 125 ? "..." : "" }}</p>
        <hr>
    </article>
    @endforeach

    {{-- <div class="card">
        <div class="image-container">
            <div class="image-container-helper"></div><img src="images/felikselise.jpg">
        </div>
        <h2>Review: Feliks Audio ELISE</h2>
        <p><i class="fas fa-tags"></i> $1000-$5000, Desktop Gear, Review<br><i class="fas fa-calendar"></i> December 1,
            2019</p>
        <p>In this review we check out the Feliks Audio Elise. It is priced at $799. I've had extensive experience
            with this amp. Throughout all the tube rolling...</p>
        <hr>
    </div>

    <div class="card">
        <div class="image-container">
            <div class="image-container-helper"></div><img src="images/felikselise.jpg">
        </div>

        <h2>Review: NFB-15.32</h2>
        <p><i class="fas fa-tags"></i> $1000-$5000, Desktop Gear, Review<br><i class="fas fa-calendar"></i> December 1,
            2019</p>
        <p>In this review we check out the NFB 15.32. At the time I purchased it, it costed me $300. I don't have
            this amp anymore, but I will briefly review from my memory.</p>
        <hr>
    </div> --}}
</main>
<div class="d-flex justify-content-center">{{ $posts->links() }}</div>

@endsection
