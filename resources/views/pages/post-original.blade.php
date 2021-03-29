@extends('layouts.frontLayout.front_design')
@section('facebook.title')
@section('facebook.description')
@section('facebook.image')
@section('twitter.title')
@section('twitter.description')
@section('twitter.image')
@section('content')

<div id="review-image">
        @if(!empty($images[0]))
        <img src="{{ asset('/images/original_photos/'.$images[0]) }}"> 
        @endif
    <div id="review-info">
        <h1>{{ $post->title }} Review</h1>
        <i class="fas fa-user"></i> <span>Richard</span>
        <i class="fas fa-clock"></i> <span>{{ $post->created_at->format('F j, Y') }}</span>
        <i class="fas fa-folder"></i> <span>@foreach($post->tags as
            $tag){{ $loop->first ? '' : ', ' }}<a title="View all posts in {{ $tag->name }}" href="/tags/{{$tag->name}}">{{ $tag->name }}</a>@endforeach</span>
    </div>
</div>
<div id="review-columns">
    <div id="review">

        <h2>Intro</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sit amet ex metus. Aliquam sit amet eros
            dictum, porttitor ante eu, lacinia libero. Aliquam eu finibus lacus. Pellentesque habitant morbi tristique
            senectus et netus et malesuada fames ac turpis egestas. Pellentesque in sodales elit, sit amet vulputate
            arcu. Cras dictum at nisl sed cursus. Duis mattis, augue in volutpat posuere, diam ante sodales enim, vitae
            placerat augue mi sed diam. Morbi auctor maximus sapien, ac congue lorem rhoncus luctus. Nam a lorem eu
            velit ullamcorper volutpat. Nulla facilisi. Donec ornare purus ut tempor venenatis. Phasellus at viverra
            augue, at sodales nibh. Phasellus venenatis metus finibus mi euismod fermentum.</p>

        <div id="self-rating">
            
            <span>Tonal Balance / Neutrality</span>
            <div class="self-rating-grey">
                <div class="self-rating-actual" style="width:87%">
                </div>
            </div>
            <br>
            <span>Price / Performance Ratio</span>
            <div class="self-rating-grey">
                <div class="self-rating-actual" style="width:78%">
                </div>
            </div>
            <br>
            <span>Sound Fidelity</span>
            <div class="self-rating-grey">
                <div class="self-rating-actual" style="width:85%">
                </div>
            </div>
            <br>
            <span>Musicality</span>
            <div class="self-rating-grey">
                <div class="self-rating-actual" style="width:96%">
                </div>
            </div>
            <br>
            <span>Build Quality</span>
            <div class="self-rating-grey">
                <div class="self-rating-actual" style="width:79%">
                </div>
            </div>
            <br>
        </div>
        
        <h2>Specs</h2>
        <p>Vestibulum arcu lacus, hendrerit at sollicitudin luctus, congue vel tellus. Suspendisse interdum nulla quis
            urna dictum interdum. Duis sit amet turpis nec nisi tincidunt gravida in at risus. Sed est velit, porta eu
            turpis sed, tempus commodo dui. Nullam vitae consequat sapien, sed bibendum quam. Proin in felis hendrerit
            nibh ornare feugiat. Fusce ac posuere erat. Nullam non dui vitae urna pellentesque feugiat.</p>
        <h2>BUILD / DESIGN</h2>

        <p>Quisque pretium luctus fringilla. Etiam in risus erat. Etiam nunc leo, malesuada nec egestas convallis,
            ultrices a magna. Sed et lorem vel lorem sollicitudin interdum et in ante. Vestibulum venenatis, orci nec
            euismod pharetra, ante orci facilisis risus, sit amet tincidunt justo libero pulvinar nunc. Sed nibh ante,
            semper eget dui eget, finibus facilisis mi. Vestibulum hendrerit tellus eu nulla imperdiet, sed vehicula
            turpis pellentesque. Cras ullamcorper justo eu nisi porta consequat. Nam quis congue nulla. Donec ultrices
            ligula quam, a pellentesque tortor tempus id. Maecenas efficitur eu metus in posuere. Aliquam maximus felis
            in sollicitudin viverra. Nulla posuere quam vel turpis commodo maximus.</p>
        
        <h2>Sound</h2>
        <div id="specific-rating">
            <div class="specific-rating-column">
                <span>Bass Extension</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Bass Balance</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Lower Midrange Balance</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Midrange Proper Balance</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Upper Midrange Balance</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Treble Balance</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Treble Extension</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div>
            </div>
            <!-- second rating column -->
            <div class="specific-rating-column">
                <span>Bass Control</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Tone Density</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Macro Dynamics</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Micro Dynamics</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Sound Stage Width</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Sound Stage Depth</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div><span>Resolution</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div>
                <span>Clarity</span>
                <div class="specific-rating-grey">
                    <div class="specific-rating-actual">
                    </div>
                </div>

            </div>
        </div>
        <p>Etiam ultrices nunc congue ipsum aliquam, et volutpat nibh pulvinar. Aliquam erat volutpat. Quisque vel
            efficitur tellus. Nunc luctus nisi eu ex varius cursus. Nulla quis semper est, eget volutpat metus. Nunc
            facilisis bibendum arcu, in rhoncus magna semper nec. Sed quis justo tristique, faucibus ante eget, finibus
            nibh. Sed consectetur tellus quis mauris elementum, id vestibulum nisl porta. Nullam et ante pellentesque,
            venenatis dui nec, pulvinar nibh. Cras luctus mollis libero, ultrices tincidunt lacus porttitor ac. Aliquam
            sodales ipsum lorem, quis vehicula lacus posuere eu. Aenean vehicula pretium odio, ac iaculis tellus dictum
            viverra. Sed a ligula et risus consectetur venenatis. Donec a lorem interdum, imperdiet lectus non, vehicula
            arcu. Aliquam erat volutpat.</p>
        <h2>Conclusion</h2>
        <p>Nunc at imperdiet tellus. Sed auctor ut ligula eu lobortis. Praesent consectetur lorem eu diam scelerisque
            tristique. Ut vitae orci at nibh convallis ullamcorper sed sit amet tortor. Donec sagittis turpis a egestas
            vestibulum. Phasellus sit amet posuere nulla. Donec mattis mollis quam ut porttitor. Duis elit diam,
            convallis ut ex sed, porta tristique lorem. Integer eu convallis quam, vel auctor sapien. In purus justo,
            fermentum vel blandit at, imperdiet sed lorem. Curabitur in sapien id eros imperdiet semper.</p>
        <nav>
            <ul>
                <li><i class="fab fa-facebook fa-2x" style="color:#3D549E"></i></li>
                <li><i class="fab fa-twitter fa-2x" style="color: #57AFE6"></i></li>
                <li><i class="fab fa-reddit fa-2x" style="color: #FF4500"></i></li>
                <li><i class="fab fa-pinterest fa-2x" style="color: #D0252C"></i></li>
                <li><i class="fas fa-envelope fa-2x" style="color: #adadad"></i></li>
            </ul>
        </nav>
        <div id="previous-next">
            @if(!empty($previous->title))
            <a href="/{{ $previous->slug }}"><div id="previous"><i class="fas fa-long-arrow-alt-left"></i><br>{{ $previous->title }}: Review</div></a>
            @endif
            @if(!empty($next->title))
            <a href="/{{ $next->slug }}"><div id="next"><i class="fas fa-long-arrow-alt-right"></i><br>{{ $next->title }}: Review</div></a>
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
    </div>


    @include('layouts.frontLayout.front_post_sidebar')
</div>

@endsection
