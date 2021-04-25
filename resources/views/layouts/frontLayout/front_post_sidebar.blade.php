<aside id="sidebar">
    {{-- <div class="sponsor">
        Sponsor Here
    </div>
    <div class="sponsor">
        Sponsor Here
    </div>
    <div class="sponsor">
        Sponsor Here
    </div> --}}
    <h2>Latest Comments</h2>
    @php($i = 0)
    @foreach(App\Comment::orderBy('id', 'desc')->take(10)->get() as $latest)
    @php($i++)
    <div class="comment">
        <div class="comment-details">
            <span class="comment-number">{{ $i }}</span>
            <p class="comment-name">{{ $latest->user->name }}</p>
            <p class="comment-thread">
                <a href="/{{ $latest->post->slug }}#{{ $latest->id }}">
                    {{-- @foreach($post->tags as $tag){{ $loop->first ? '' : ', ' }}@if(\Str::contains($tag->name, ['$']))<a title="View all posts in {{ $tag->name }}" href="/category/budget/{{ $tag->slug }}">{{ $tag->name }}</a>{{''}}@else{{''}}<a title="View all posts in {{ $tag->name }}" href="/category/tags/{{ $tag->slug }}">{{ $tag->name }}</a>{{''}}@endif{{''}}@endforeach
                    @if ($post->category)
                    @if(!empty($post->category->parent['slug']))
                    <a href="/category/{{ $post->category->parent['slug'] }}/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                    @else
                    <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
                    @endif
                    @endif:  --}}
                {{ $latest->post->title }}</p>
            </a>
        </div>
        <div class="comment-text">
                {{ substr(strip_tags($latest->body), 0, 25) }} {{ strlen($latest->body) > 25 ? "..." : "" }}
        </div>
    </div>
    @endforeach
</aside>
