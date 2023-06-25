@extends('layout.master')
@section('content')
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
                                <span>{{ $genre->genre_name->name }}</span>
                            @endforeach
                        @endif
                    </h1>
                    <h1>Contact: <span>{{ $book->user->phone }}</span></h1>
                    <h1>Location: <span>{{ $book->location }}</span></h1>
                    <h2>Description: <span>{{ $book->description }}</span></h2>
                </div>
            </div>
        </div>
    @endif
    <style>
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
