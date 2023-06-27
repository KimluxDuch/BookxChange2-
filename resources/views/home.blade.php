@extends('layout.master')
@section('content')
    <div class="container">

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
                        <span class="search_icon"></span>
                        <input type="text" placeholder="Search Titles" name="searchQuery" class="search_input">
                        <button type="submit" class="search_button">
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
            padding: 0 1rem;
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
            position: relative;
            display: flex;
            align-items: center;
            width: max-content;
            height: 40px;
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


        /* New */
        .search_icon {
            position: absolute;
            left: 10px;
            width: 20px;
            height: 20px;
            background: url("data:image/svg+xml,%3Csvg viewBox='0 0 256.001 256.001' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='m232.477 215.516-40.678-40.678a96.108 96.108 0 1 0-16.972 16.97l40.679 40.678a12 12 0 1 0 16.97-16.97ZM43.997 116a72 72 0 1 1 72 72 72.081 72.081 0 0 1-72-72Z' fill='grey'/%3E%3C/svg%3E") left content-box no-repeat;
        }

        .search_input {
            cursor: pointer;
            font: normal 1rem Calibri;
            color: #505050;
            width: 320px;
            height: 20px;
            padding: 10px 100px 10px 40px;
            border-radius: 4px;
            border: solid 2px #121213;
        }

        .search_button {
            position: absolute;
            right: 1px;
            width: 90px;
            height: 40px;
            background-color: #e4e4e4;
            border: none;
            border-radius: 0 4px 4px 0;
        }

        .card {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            max-width: 100%;
            height: 425px;
            background: white;
            border-radius: 20px;
            transition: 0s;
            box-shadow: 0 35px 80px rgba(0, 0, 0, 0.15);
        }

        .card:hover {
            height: 450px;
        }

        .card .img-box {
            position: absolute;
            top: 20px;
            z-index: 1;
            width: calc(100% - 40px);
            height: max-content;
            background: #333;
            border-radius: 12px;
            overflow: hidden;
            transition: 0.5s;
        }

        .card:hover .img-box {
            top: -100px;
            scale: 0.75;
            box-shadow: 0 15px 45px rgba(0, 0, 0, 0.2);
        }

        .book_info {
            position: absolute;
            bottom: 10px;
            display: flex;
            flex-direction: column;
            width: 100%;
            height: 35px;
            text-align: center;
            overflow: hidden;
            transition: 0.5s;
        }

        .book_title {
            font: bold 30px Calibri;
            text-align: center;
            overflow: hidden;
            transition: 0.5s;
            flex: 0 0 auto;
        }

        .book_wrapper {
            opacity: 0;
            transition: 1s;
        }

        .card:hover .book_wrapper {
            opacity: 1;
        }

        .book_detail {
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            overflow: hidden;
            font: normal 15px Calibri;
            text-align: center;
            overflow: hidden;
            transition: 0.5s;
            margin: 15px;
        }

        .card:hover .book_info {
            height: max-content;
        }
    </style>
@endsection
