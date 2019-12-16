@extends('layouts.frontLayout.front_design')
@section('facebook.title', $post->meta_title)
@section('facebook.description', $post->meta_description)
@section('facebook.image', asset('/images/original_photos/'.$mainImage))
{{-- @section('facebook.url', request()->fullUrl()) --}}
@section('twitter.title', $post->meta_title)
@section('twitter.description', $post->meta_description)
@section('twitter.image', $mainImage)
@section('content')

<section id="review-image">

    <img src="{{ asset('/images/original_photos/'.$mainImage) }}">

    <div id="review-info">
        <h1>{{ $post->title }} Review</h1>
        <i class="fas fa-user"></i> <span>Richard</span>
        <i class="fas fa-clock"></i> <span>{{ $post->created_at->format('F j, Y') }}</span>
        <i class="fas fa-folder"></i> <span>@foreach($post->tags as
            $tag){{ $loop->first ? '' : ', ' }}<a title="View all posts in {{ $tag->name }}"
                href="/tags/{{$tag->name}}">{{ $tag->name }}</a>@endforeach</span>
    </div>
</section>
<section id="review-columns">
    <main id="review">

        {!! $post->body !!}

        {{-- <div id="self-rating">
            <div class="self-rating-show"><span>Tonal Balance / Neutrality</span><span>10</span></div>
            <div class="self-rating-grey">
                <div class="self-rating-actual" style="width: {{ $post->tonal_balance_neutrality }}%">
                </div>
            </div>
            <br>
            <div class="self-rating-show"><span>Price / Performance Ratio</span><span></span></div>

            <div class="self-rating-grey">
                <div class="self-rating-actual" style="width: {{ $post->price_performance }}%">
                </div>
            </div>
            <br>
            <div class="self-rating-show"><span>Sound Fidelity</span><span></span></div>

            <div class="self-rating-grey">
                <div class="self-rating-actual" style="width:{{ $post->sound_fidelity }}%">
                </div>
            </div>
            <br>
            <div class="self-rating-show"><span>Musicality</span><span></span></div>
            <div class="self-rating-grey">
                <div class="self-rating-actual" style="width:{{ $post->musicality }}%">
                </div>
            </div>
            <br>
            <div class="self-rating-show"><span>Build Quality</span><span></span></div>
            <div class="self-rating-grey">
                <div class="self-rating-actual" style="width:{{ $post->build_quality }}%">
                </div>
            </div>
            <br>
        </div>
        <div id="specific-rating">
            <div class="specific-rating-column">
                <div class="specific-rating-show"><span>Bass Extension</span><span>10</span></div>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual" style="width: {{ $post->bass_extension }}%">
                    </div>
                </div>
                <div class="specific-rating-show"><span>Bass Balance</span><span></span></div>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual" style="width: {{ $post->bass_balance }}%">
                    </div>
                </div>
                <div class="specific-rating-show"><span>Lower Midrange Balance</span><span></span></div>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual" style="width: {{ $post->lower_midrange_balance }}%">
                    </div>
                </div>
                <div class="specific-rating-show"><span>Midrange Proper Balance</span><span></span></div>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual" style="width: {{ $post->midrange_proper_balance }}%">
                    </div>
                </div>
                <div class="specific-rating-show"><span>Upper Midrange Balance</span><span></span></div>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual" style="width: {{ $post->upper_midrange_balance }}%">
                    </div>
                </div>
                <div class="specific-rating-show"><span>Treble Balance</span><span></span></div>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual" style="width: {{ $post->treble_balance }}%">
                    </div>
                </div>
                <div class="specific-rating-show"><span>Treble Extension</span><span></span></div>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual" style="width: {{ $post->treble_extension }}%">
                    </div>
                </div>
            </div>
            <!-- second rating column -->
            <div class="specific-rating-column">
                <div class="specific-rating-show"><span>Bass Control</span><span></span></div>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual" style="width: {{ $post->bass_control }}%">
                    </div>
                </div>
                <div class="specific-rating-show"><span>Tone Density</span><span></span></div>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual" style="width: {{ $post->tone_density }}%">
                    </div>
                </div>
                <div class="specific-rating-show"><span>Macro Dynamics</span><span></span></div>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual" style="width: {{ $post->macro_dynamics }}%">
                    </div>
                </div>
                <div class="specific-rating-show"><span>Micro Dynamics</span><span></span></div>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual" style="width: {{ $post->micro_dynamics }}%">
                    </div>
                </div>
                <div class="specific-rating-show"><span>Sound Stage Width</span><span></span></div>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual" style="width: {{ $post->soundstage_width }}%">
                    </div>
                </div>
                <div class="specific-rating-show"><span>Sound Stage Depth</span><span></span></div>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual" style="width: {{ $post->soundstage_depth }}%">
                    </div>
                </div>
                <div class="specific-rating-show"><span>Resolution</span><span></span></div>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual" style="width: {{ $post->resolution }}%">
                    </div>
                </div>
                <div class="specific-rating-show"><span>Clarity</span><span></span></div>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual" style="width: {{ $post->clarity }}%">
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- <nav>
            <ul>
                <li><i class="fab fa-facebook fa-2x" style="color:#3D549E"></i></li>
                <li><i class="fab fa-twitter fa-2x" style="color: #57AFE6"></i></li>
                <li><i class="fab fa-reddit fa-2x" style="color: #FF4500"></i></li>
                <li><i class="fab fa-pinterest fa-2x" style="color: #D0252C"></i></li>
                <li><i class="fas fa-envelope fa-2x" style="color: #adadad"></i></li>
            </ul>
        </nav> --}}
        <div class="sharethis-inline-share-buttons"></div>
        <div id="previous-next">
            @if(!empty($previous->title))
            <a href="/{{ $previous->slug }}">
                <div id="previous"><i class="fas fa-long-arrow-alt-left"></i><br>{{ $previous->title }}: Review</div>
            </a>
            @endif
            @if(!empty($next->title))
            <a href="/{{ $next->slug }}">
                <div id="next"><i class="fas fa-long-arrow-alt-right"></i><br>{{ $next->title }}: Review</div>
            </a>
            @endif
        </div>
        <div id="related-articles">
            <h2>Related Articles</h2>
            <div id="related-articles-container">
                @foreach($related as $relate)
                <a href="/{{ $relate->slug }}">
                    <div class="related-articles-column">
                        <img src="/images/yulongmain.jpg">
                        <p class="related-date">{{ $relate->created_at->format('F j, Y')}}</p>
                        <h3>Review: {{ $relate->title }}</h3>
                    </div>
                </a>
                @endforeach
                {{-- <div class="related-articles-column">
                    <img src="/images/yulongmain.jpg">
                    <p class="related-date">December 2, 2019</p>
                    <h3>Review: NFB 15.32</h3>
                </div> --}}

            </div>

        </div>
        <div id="comments">
            <div id="number-comments">{{ $post->commentCount }} Comments</div>
            <hr id="number-comments-divider">
            @include('partials._comment_replies', ['comments' => $post->comments, 'post_id' => $post->id])
        </div>

        <div id="leave-a-reply">
            Leave A Reply

            <hr id="leave-a-reply-divider">

            @if(Auth::check())
            <form action="/comment/store" method="POST">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <span>Comment</span><br>
                <textarea name="body"></textarea>
                <button type="submit">Post Comment</button>
            </form>
            @else
            <p style="font-family: Oswald; letter-spacing: 1px;">Please <a href="/login">login</a> to reply.</p>
            @endif
        </div>
    </main>


    @include('layouts.frontLayout.front_post_sidebar')
</section>

@endsection
