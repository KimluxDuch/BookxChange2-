@extends('layout.master')
@section('content')

<style>

    .container {
    }
    table {
        width: 100%;
        padding: 20px;
    }
    table, tr, td , th{
        border:none;

    }
   tr{
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      background-color: white; 
      text-align: center;

      
   }
   td , th {
    padding: 15px;
   }
   .container-table {
    min-height: 100vh;
   }

   .action {
    display:flex ; 
    margin: 5px; 
    align-items: center;
    justify-content: center; 
   }

   button {
    background: none;
	color: inherit;
	border: none;
	padding: 0;
	font: inherit;
	cursor: pointer;
	outline: inherit;
   }

   .fa-pen-to-square {
     color: grey ;
   }

   .fa-trash {
    color:red; 
   }


</style>
<div class="container">
 @if($books->isEmpty())
  <p>No Book </p>
 @else
 <div class="container-table">
    <table>
        <thead>
            <th>Title</th>
            <th>Author</th>
            <th>Location</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($books as $book) 
            <tr>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->location}}</td>
                <td class='action'>
                    <a href="{{ route('profile.edit', ['profile' => $book->id ]) }}">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </a>
                    <form action="{{ route('profile.destroy',  ['profile' => $book->id ]) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="" onclick="return confirm('Are you sure you want to delete this book?')">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                        </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
 </div>
 
 @endif 
  

</div>
@endsection
