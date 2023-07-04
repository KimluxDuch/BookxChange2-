<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
    	$request->validate([
            'body'=>'required',
        ]);
   
        $input = $request->all();
        $input['user_id'] = auth()->user()->id;
        $input['books_id'] = $request->input('books_id');
        
    
        Comment::create($input);
   
        return back();
    }
}
