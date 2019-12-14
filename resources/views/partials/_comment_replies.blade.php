@foreach($comments as $comment)
<div id="comment-spacing" @if($comment->parent_id !== null) style="margin-left: 37.5px" @endif>
    <div class="comment" id="{{ $comment->id }}">
        <div class="comment-info">
            <div class="comment-column">
            </div>
            <div class="comment-column">
                <span class="date">{{ $comment->created_at->format('F j, Y') }}</span><br><span
                    class="name">{{ $comment->user->name }}</span>
            </div>
        </div>
        <div class="comment-actual">
            {{ $comment->body }}
        </div>
        <hr>
        <div id="comment-reply">
            <form method="post" action="{{ route('reply.add') }}">
                @csrf
                <div id="comment-reply-box">
                    <textarea name="body"></textarea>
                    <input type="hidden" name="post_id" value="{{ $post_id }}">
                    <input type="hidden" name="id" value="{{ $comment->id }}">
                    <br>
                    <input type="submit" value="Reply">
                </div>
            </form>
        </div>
        <hr>
        @include('partials._comment_replies', ['comments' => $comment->replies])
    </div>
</div>
@endforeach