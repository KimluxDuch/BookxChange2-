<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'title',
        'author',
        'description',
        'cover_img',
        'user_id',
        'location'
    ];

    public function user() {
        // id is the primary key of the users table, user_id is the foreign key of the books table
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function genres() {
        // id is the primary key of the genres table, genre_id is the foreign key of the book_genres table
        return $this->hasMany(BookGenres::class, 'book_id', 'id');
    }
}
