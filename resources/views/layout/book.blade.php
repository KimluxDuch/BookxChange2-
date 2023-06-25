@if (count($books) > 0)
    @foreach ($books as $book)
        <a class="book" href="/book/detail/{{ $book->id }}">
            <diiv class="cover">
                <img src="{{ $book->cover_img }}" alt="cover_image">
            </diiv>
            <h1>{{ $book->title }}</h1>
            <h2>Genre:
                @if ($book->genres)
                    @foreach ($book->genres as $genre)
                        <span>{{ $genre->genre_name->name }}</span>
                    @endforeach
                @endif
            </h2>
            @if ($book->user)
                <h3>By {{ $book->user->username }}</h3>
            @endif
        </a>
    @endforeach
@endif

<style>
    .book {
        cursor: pointer;
        background: white;
        padding: 1rem;
        border-radius: 7px;
        border: 1px solid grey;
        transition: 0.15s ease-in-out;
    }

    .book:hover {
        transform: scale(1.05);
        border: 1px solid orangered;
    }

    .book .cover {
        display: block;
        width: 100%;
        aspect-ratio: 1/1.3;
        overflow: hidden;
    }

    .book img {
        display: block;
        width: 100%;
        object-fit: cover;
    }

    .book h1 {
        font-family: 'Merriweather', sans-serif;
        font-size: 1.3rem;
        margin: 0;
        margin-top: .5rem;
    }

    .book h2 {
        margin: 0;
        font-family: 'Ysabeau Office', sans-serif;
        font-size: 1.1rem;
        font-weight: normal;
        margin: 0;
        transform: translateY(-.15rem);
    }

    .book h2 span:first-child::before {
        content: '';
    }

    .book h2 span::before {
        content: ', '
    }

    .book h3 {
        font-family: 'Ysabeau Office', sans-serif;
        text-align: right;
        font-size: 1.1rem;
    }
</style>
