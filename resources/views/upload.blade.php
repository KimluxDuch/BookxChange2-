@extends('layout.master')
@section('content')
    <div class="fill">
        <form action="/bookUploadSave" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grey">
                <h1>Upload</h1>
            </div>
            <div class="bg">
                <div>
                    <h2>Title</h2>
                    <input type="text" placeholder="Who moved the cheese?" name="title">
                </div>
                <div>
                    <h2>Author</h2>
                    <input type="text" placeholder="Dara" name="author">
                </div>
                <div>
                    <h2>Description</h2>
                    <input type="text" placeholder="Very Descriptive" name="description">
                </div>
                <div>
                    <h2>Genres</h2>
                    <div class="genre-select">
                        @if (count($genres) > 0)
                            @foreach ($genres as $genre)
                                <label>
                                    <input type="checkbox" name="genres[]" value="{{ $genre->id }}">
                                    {{ $genre->name }}
                                </label>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div>
                    <h2>Location</h2>
                    <select name="location">
                        <option value="Paragon International University">Paragon International University</option>
                        <option value="Block 11">Block 11</option>
                    </select>
                </div>
                <div>
                    <h2>Image Cover</h2>
                    <input type="file" name="cover_img">
                </div>
            </div>
            <div class="grey">
                <div class="btn">
                    <button type="submit">Upload</button>
                </div>
            </div>
        </form>
    </div>
    <style>
        .fill .genre-select {
            display: flex;
            flex-direction: column;
            max-height: 100px;
            overflow: auto;
            margin-bottom: .5rem;
        }

        .fill .genre-select input {
            width: 20px;
        }

        .fill label {
            font-family: 'Ysabeau Office', sans-serif;
            font-size: 1.1rem;
        }

        .fill .grey {
            padding: 1rem;
            font-size: 1.2rem;
            text-align: center;
            background: rgb(241, 241, 241);
        }

        .fill select {
            font-family: 'Ysabeau Office', sans-serif;
            font-size: 1.1rem;
            margin-bottom: .5rem;
        }

        .fill option {
            font-family: 'Ysabeau Office', sans-serif;
            font-size: 1.1rem;
        }

        .fill h1 {
            padding: 1rem;
            font-weight: normal;
        }

        .fill .btn {
            display: flex;
            justify-content: center;
        }

        .fill button {
            padding: 0.8rem 1rem;
            border: none;
            font-size: .8rem;
            color: white;
            background: rgb(0, 81, 255);
            font-family: 'Merriweather', sans-serif;
            border-radius: 6px;
            cursor: pointer;
        }

        .fill {
            padding: 4rem 0;
            display: grid;
            place-items: center;
            background: skyblue;
        }

        .fill .bg {
            background: white;
            padding: 2rem;
            border-bottom: 1px solid rgb(182, 182, 182);
            border-top: 1px solid rgb(182, 182, 182);
        }

        .fill form {}

        .fill h2 {
            font-family: 'Ysabeau Office', sans-serif;
            font-size: 1.1rem;
        }

        .fill input {
            font-family: 'Ysabeau Office', sans-serif;
            width: 400px;
            padding: .5rem;
            padding-top: .2rem;
            font-size: 1.1rem;
            margin-bottom: .5rem;
        }
    </style>
@endsection
