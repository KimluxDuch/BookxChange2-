<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Books;
use App\Models\Genres;
use App\Models\BookGenres;


use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();
        $books = Books::where('user_id', $user->id)->get();

        return view('profile.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::User();
        $book = Books::where('user_id', $user->id)->findOrfail($id);
        $genres = Genres::all();
        return view('profile.edit', compact('book','genres'),
    );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $user = Auth::user();
    $book = Books::where('user_id', $user->id)->findOrFail($id);

    $request->validate([
        'title' => 'required',
        'author' => 'required',
        'description' => 'required'
    ]);

    $genreIds = $request->input('genres', []);

    $currentGenreIds = $book->genres->pluck('id')->toArray();

    $genresToAttach = array_diff($genreIds, $currentGenreIds);

    $genresToDetach = array_diff($currentGenreIds, $genreIds);

    foreach ($genresToAttach as $genreId) {
        $book->genres()->attach($genreId);
    }

    foreach ($genresToDetach as $genreId) {
        $book->genres()->detach($genreId);
    }

    // Update the book's other fields
    $book->update($request->except('genres'));

    return redirect()->route('profile.index')->with('success', 'Book updated successfully');
}


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = Auth::User();
        $book = Books::where('user_id', $user->id)->findOrfail($id);

        $book->delete();
    
        return redirect()->route('profile.index')
                        ->with('success','Book deleted successfully');
    }
}
