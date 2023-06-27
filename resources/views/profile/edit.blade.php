@extends('layout.master')
@section('content')
    <div class="fill">
        <form action="{{ route('profile.update', ['profile' => $book->id ]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="grey">
                <h1>Upload</h1>
            </div>
            <div class="bg">
                <div>
                    <h2>Title</h2>
                    <input type="text" placeholder="Who moved the cheese?" name="title" value= "{{ $book->title }}">
                </div>
                <div>
                    <h2>Author</h2>
                    <input type="text" placeholder="Dara" name="author" value= "{{ $book->author }}">
                </div>
                <div>
                    <h2>Description</h2>
                    <input type="text" placeholder="Very Descriptive" name="description" value= "{{ $book->description }}" >
                </div>

                <div>
                    <h2>Genres</h2>
                    <div class="genre-select">
                        @foreach($genres as $genre)
                            <div class="">
                                <input type="checkbox" name="genres[]" value="{{ $genre->id }}" {{ $book->genres->contains($genre->id) ? 'checked' : '' }}>
                                {{ $genre->name }}
                            </div>
                        @endforeach
                    </div>
                </div>
          
                <div>
                    <h2>Location</h2>
                    <select name="location">
                        <option value="Paragon International University">Paragon International University</option>
                        <option value="Block 11">Block 11</option>
                        <option value="Arabica coffee Toul Kork">Arabica coffee Toul Kork</option>
                        <option value="Bak Touk High School">Bak Touk High School</option>
                        <option value="Independence Monument, Independence Monument, Phnom Penh">Independence Monument
                        </option>
                        <option value="Wat Phnom">Wat Phnom</option>
                        <option value="Royal Palace Park">Royal Palace Park</option>
                        <option value="Megadis Store 371">Megadis Store 371</option>
                        <option value="Aeon Mall Mean Chey">Aeon Mall Mean Chey</option>
                        <option value="Coconut Park">Coconut Park</option>
                        <option value="Chip Mong 271 Mega Mall">Chip Mong 271 Mega Mall</option>
                        <option value="Eden Garden Mall">Eden Garden Mall</option>
                        <option value="Midtown Community Mall">Midtown Community Mall</option>
                        <option value="Olympic Market">Olympic Market</option>
                        <option value="Chip Mong Sen Sok Mall">Chip Mong Sen Sok Mall</option>
                    </select>
                </div>
                <div>
                    <h2>Image Cover</h2>
                    <input type="file" name="cover_img">
                </div>
                
            </div>
        
          

            
            <div class="grey">
                <div class="btn">
                    <button type="submit">Update</button>
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




