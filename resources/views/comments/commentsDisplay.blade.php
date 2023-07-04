
@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <strong>{{ $comment->user->username }}</strong>
        <p>{{ $comment->body }}</p>
        <form action="/comments" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group ms-5">
                <input class="form-control input-style" name="body"></input>
                <input type="hidden" name="books_id" value="{{ $books_id }}" />
                <input type="hidden" name="parent_id" value="{{ $comment->id }}" />
            </div>
                <input type="submit" class="btn-reply my-2 ms-5" value="Reply" />
        </form>
        @include('comments.commentsDisplay', ['comments' => $comment->replies])
    </div>
@endforeach


