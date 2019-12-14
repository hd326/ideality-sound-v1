<div id="sponsors">
    <div class="sponsor">
        Sponsor Here
    </div>
    <div class="sponsor">
        Sponsor Here
    </div>
    <div class="sponsor">
        Sponsor Here
    </div>
    <h2>Latest Comments</h2>
    @php($i = 0)
    @foreach($latestSideCol as $latest)
    @php($i++)
    <div class="comment">
        <div class="comment-details">
            <span class="comment-number">{{ $i }} </span>
            <p class="comment-name">{{ $latest->user->name }}</p>
            <p class="comment-thread">
                <a href="/{{ $latest->post->slug }}#{{ $latest->id }}">
                @foreach($latest->post->tags as $tags)
                 {{ $tags->name }}
                @endforeach: 
                {{ $latest->post->title }}</p>
            </a>
        </div>
        <div class="comment-text">

                {{ substr(strip_tags($latest->body), 0, 175) }} {{ strlen($latest->body) > 200 ? "..." : "" }}

        </div>
    </div>
    @endforeach
</div>
