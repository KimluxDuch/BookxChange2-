@extends('layout.master')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    @if ($book)
        <div class="container">
            <div class="detail">
                <img src="{{ $book->cover_img }}" alt="cover image">
                <div class="info">
                    <h1>Title: <span>{{ $book->title }} </span></h1>
                    <h1>Author: <span>{{ $book->author }}</span></h1>
                    <h1 class="genre">Genre:
                        @if ($book->genres)
                            @foreach ($book->genres as $genre)
                                <span>{{ $genre->name }}</span>
                            @endforeach
                        @endif
                    </h1>
                    <h1>Contact Owner: <span>{{ $book->user->phone }}</span></h1>
                    <h1>Location to Pick up: <span>{{ $book->location }}</span></h1>
                    <h2>Book Description: <span>{{ $book->description }}</span></h2>
                </div>
            </div>
            <div class="comment_area">
                <form action="" method="POST">
                    @csrf
                    <div class="bg">
                        <div>
                            <h2>Leave a Comment</h2>
                            <textarea type="text" placeholder="Say Something" name="" cols="90" rows="6"></textarea>
                        </div>
                    </div>
                    <div class="grey">
                        <div class="button">
                            <button type="submit">Post</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


  
            <div class="container">
                @include('comments.commentsDisplay', ['comments' => $book->comments, 'books_id' => $book->id])
                <hr>
                <h6>Add comment</h6>
                <form action="/comments" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <input class="form-control input-style" name="body"></input>
                        <input type="hidden" name="books_id" value="{{ $book->id }}" />
                    </div>
                    <input type="submit" class="btn-comment my-3" value="Add Comment" />
                </form>
            </div>

    @endif


    <style>
        .comment_area {
            padding: 1rem;
            font-size: 1.2rem;
            text-align: center;
            background: rgb(241, 241, 241);
            font-family: 'Merriweather', sans-serif;
            border-radius: 5px;
        }
        .comment_area button {
            padding:  0.8rem 1rem;
            border: none;
            font-size: .8rem;
            color: white;
            background: rgb(0, 81, 255);
            border-radius: 6px;
            cursor: pointer;
        }
        .comment_area textarea {
            border-radius: 5px;
            font-family: 'Ysabeau Office', sans-serif;
        }
        .input-style {
            width:280px; 
            height:15px;
        }

        .btn-comment {
            width: 110px;
            height: 20px;
            font-size: 0.8rem;
        }

        .btn-reply {
            width: 70px;
            height: 20px;
            font-size: 0.8rem;
        }

        .comment-container {
            background-color: red; 
            padding: 25px;
        }
        .detail .genre span:first-child::before {
            content: "";
        }

        .detail .genre span::before {
            content: ", ";
        }

        .detail {
            padding: 2rem 0;
            display: grid;
            grid-template-columns: 1fr 3fr;
            column-gap: 2rem;

        }

        .detail img {
            aspect-ratio: 1/1.5;
            width: 100%;
            object-fit: cover;
        }

        .detail h1 {
            margin: 1rem 0;
            font-family: 'Merriweather', sans-serif;
            font-size: 1.3rem;
        }

        .detail h2 {
            margin: 1rem 0;
            font-size: 1.1rem;
            font-family: 'Merriweather', sans-serif;
        }

        .detail h2 span {
            font-weight: normal;
            font-weight: 1.2rem;
            font-family: 'Ysabeau Office', sans-serif;
        }

        .detail h1 span {
            font-weight: normal;
        }
    </style>
@endsection
