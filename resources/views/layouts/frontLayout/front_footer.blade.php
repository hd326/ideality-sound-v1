{{-- <section id="sponsor-placement">
    Sponsor Here
</section> --}}

<section id="pre-footer">
    <div id="pre-footer-container">
        <div class="pre-footer-col">
            <div class="pre-footer-col-header">
                <h3>POPULAR TAGS</h3>
            </div>
            <div id="tags">
                @foreach(\App\Tag::get() as $tag)
                @if(\Str::contains($tag->name, ['$'])) 

                @else 
                <span class="tag"><a href="/category/tags/{{ $tag->slug }}">{{ $tag->name }}</a></span>
                @endif
                @endforeach
                {{-- <span class="tag">64 audio</span>
                    <span class="tag">Feliks Audio</span>
                    <span class="tag">Audio-gd</span>
                    <span class="tag">Woo Audio</span>
                    <span class="tag">DNA</span>
                    <span class="tag">Schiit Audio</span>
                    <span class="tag">Holo Spring</span>
                    <span class="tag">CanJam</span>
                    <span class="tag">Gustard</span> --}}
                {{-- @foreach($tags as $tag)
                    <span class="tag"><a href="{{ url('tags/'.$tag->name) }}">{{ $tag->name }}</a></span>
                @endforeach --}}

            </div>
        </div>
        {{-- <div class="pre-footer-col">
            <h3>INSTAGRAM</h3>
        </div> --}}
        <div class="pre-footer-col">
            <div class="pre-footer-col-header">
                <h3>LATEST COMMENTS</h3>
            </div>
            <div id="footer-comments">
                @php($i = 0)
                @foreach(App\Comment::orderBy('id', 'desc')->take(3)->get() as $latest)
                @php($i++)
                <div class="comment">
                    <div class="comment-details">
                        <div class="details">
                            <span class="comment-number">{{ $i }} </span>
                            <p class="comment-name">{{ $latest->user->name }}</p>
                            <p class="comment-thread">
                            <a href="/{{ $latest->post->slug }}#{{ $latest->id}}">
                                    {{-- @foreach($latest->post->tags as $tags)
                                    {{ $tags->name }}
                                    @endforeach: --}}
                                    {{ $latest->post->title }}</p>
                            </a>
                        </div>
                        <div class="photo">
                            @if ($latest->user->avatar() == '')
                            <a class="avatar"><p class="avatar" style="background-color: {{ $latest->user->color }}">{{ substr($latest->user->name, 0, 1) }}</p></a>
                            @else
                            <a class="avatar"><p class="personal-avatar"><img style="" src="/storage/{{ $latest->user->avatar() }}" alt="User avatar"></p></a>
                            @endif
                        </div>
                    </div>
                    <div class="comment-text">
                        {{ substr(strip_tags($latest->body), 0, 25) }} {{ strlen($latest->body) > 25 ? "..." : "" }}
                    </div>
                </div>
                @endforeach
                {{-- <div class="comment">
                        <div class="comment-details">
                            <span class="comment-number">2</span>
                            <p class="comment-name">ELECTROSTATIC</p>
                            <p class="comment-thread">Review: Feliks Audio Elise</p>
                        </div>
                        <div class="comment-text">
                            This is really cool post..:)
                        </div>
                    </div>
                    <div class="comment">
                        <div class="comment-details">
                            <span class="comment-number">3</span>
                            <p class="comment-name">ELECTROSTATIC</p>
                            <p class="comment-thread">Review: Feliks Audio Elise</p>
                        </div>
                        <div class="comment-text">
                            This is really cool post..:)
                        </div>
                    </div> --}}
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer-actual-col">Copyright 2019 <span class="dot">.</span> idealitysound <span class="dot">.</span>
        All Rights Reserved</div>
    <div class="footer-actual-col">
        <nav>
            <ul>
                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('disclaimer') }}">Disclaimer/Copyright</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('subscribe') }}">Subscribe</a></li>
                {{-- <li><i class="fab fa-youtube"></i></li>
                <li><i class="fab fa-instagram"></i></li>
                <li><i class="fab fa-twitter"></i></li>
                <li><i class="fab fa-facebook"></i></li> --}}
            </ul>
        </nav>
    </div>

</footer>
