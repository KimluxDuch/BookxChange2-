@extends('layout.master')
@section('content')
    <div class="container">
        <a href="../../upload">{{ $user->username }}</a>

        <h1 class="new">New Arrival</h1>
        <form action="./" method="GET">
            <div class="grid">
                <section class="genre">
                    <div>
                        <h2>Genre</h2>
                        @if (count($genres) > 0)
                            @foreach ($genres as $genre)
                                <label for="{{ $genre->id }}">
                                    <input type="checkbox" id="{{ $genre->id }}" name="genres[]"
                                        value="{{ $genre->id }}">
                                    {{ $genre->name }}
                                </label>
                            @endforeach
                        @endif
                    </div>
                </section>
                <section class="books">

                    <div class="search">
                        <input type="text" placeholder="Search Titles" name="searchQuery">
                        <button type="submit">
                            <img src="../../images/search.png" alt="">
                            Search
                        </button>
                    </div>
                    <ul>
                        {{-- second argu pass props to book layout --}}
                        @include('layout.book', ['books' => $books])
                    </ul>
                </section>
            </div>
        </form>
    </div>
    <style>
        .genre {
            display: flex;
            flex-direction: column;
            row-gap: 3rem;
        }

        .genre div {
            display: flex;
            flex-direction: column;
        }

        .genre label {
            margin: 0.5rem 0;
            font-family: 'Ysabeau Office', sans-serif;
            font-size: 1.2rem;
        }

        .genre h2 {
            font-family: 'Merriweather', sans-serif;
            font-weight: normal;
            margin-bottom: .25rem;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 3fr;
            column-gap: 1rem;
        }

        .search {
            display: flex;
            align-items: center;
        }

        .search input {
            font-family: 'Ysabeau Office', sans-serif;
            width: 400px;
            padding: .5rem .5rem;
            font-size: 1rem;
        }

        .search img {
            position: relative;
            width: 24px;
            transform: translateX(-2rem);
        }

        .books {
            padding-left: 1rem;
            border-left: 1px solid rgb(163, 162, 162);
            padding-bottom: 2rem;
        }

        .books ul {
            margin-top: 1.5rem;
            column-gap: 1.5rem;
            row-gap: 1rem;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }

        .new {
            margin: 0;
            margin-bottom: 1rem;
            font-family: 'Merriweather', sans-serif;
            padding: 2rem 0;
            text-align: center;
            border-bottom: 1px solid rgb(163, 162, 162);
        }
    </style>
@endsection
