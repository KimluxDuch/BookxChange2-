<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Books;
use App\Models\Genres;
use GuzzleHttp\Client;
use App\Models\BookGenres;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function uploadToImgur($image)
    {
        $client_id = env('IMGUR_CLIENT_ID');

        // https://stackoverflow.com/questions/63060351/how-to-upload-images-to-imgur-using-laravel
        // upload image to imgur api to my account
        $client = new Client;
        $response = $client->request('POST', 'https://api.imgur.com/3/image', [
            'headers' => [
                'authorization' => 'Client-ID ' . $client_id,
                // if we want to store the image to our account
                // 'authorization' => 'Bearer '. env('IMGUR_ACCESS_TOKEN'),
                'content-type' => 'application/x-www-form-urlencoded',
            ],
            'form_params' => [
                'image' => base64_encode(file_get_contents($image)),
            ],
        ]);

        // get link
        return json_decode($response->getBody()->getContents())->data->link;
    }

    public function home(Request $request)
    {
        $query = $request->query('searchQuery');
        $genresQuery = $request->query('genres');
        $user = Auth::user() ;

        if ($genresQuery) {
            $books = Books::with('user', 'genres.genre_name')->where('title', 'like', '%' . $query . '%')
                ->whereHas('genres', function ($query) use ($genresQuery) {
                    $query->where('genre_id', $genresQuery);
                })->get();
        } else {
            $books = Books::with('user', 'genres.genre_name')->where('title', 'like', '%' . $query . '%')->get();
        }

        $genres = Genres::get();

        // return response()->json($books);

        return view('home', [
            'books' => $books,
            'genres' => $genres,
            'genresQuery' => $genresQuery,
            'user' => $user
        ]);
    }
    public function about()
    {
        return view('about');
    }
    public function signUp()
    {
        return view('signUp');
    }
    public function login()
    {
        return view('login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    public function upload()
    {
        $genres = Genres::get();
        return view('upload', [
            'genres' => $genres,
        ]);
    }
    public function bookDetail($id)
    {
        $book = Books::with('user', 'genres.genre_name')->where('id', $id)->first();
        return view('bookDetail', [
            'book' => $book,
        ]);
    }
    public function registerUser(Request $request)
    {
        $createUser = User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'password' => $request->input('password')
        ]);

        if ($createUser) {
            return redirect()->route('login');
        } else {
            return redirect()->back();
        }
    }

    public function loginUser(Request $request)
    {
        Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        if (Auth::check()) {
            return redirect('/');
        } else {
            return redirect()->back();
        }
    }

    public function bookUploadSave(Request $request)
    {
        // check if user is logged in before process the request
        if (Auth::check()) {
            $cover_url = $this->uploadToImgur($request->file('cover_img'));

            $createBook = Books::create([
                'title' => $request->input('title'),
                'author' => $request->input('author'),
                'description' => $request->input('description'),
                'cover_img' => $cover_url,
                'user_id' => Auth::user()->id,
                'location' => $request->input('location'),
            ]);

            if ($createBook) {
                foreach ($request->input('genres') as $genre_id) {
                    $saveGenres = BookGenres::create([
                        'book_id' => $createBook->id,
                        'genre_id' => $genre_id
                    ]);
                }
            }

            if ($saveGenres && $createBook) {
                return redirect('/');
            } else {
                return redirect()->back();
            }
        }
    }
}
