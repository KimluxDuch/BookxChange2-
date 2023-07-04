<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationBook extends Model
{
    
    use HasFactory;

    protected $table = 'location_book'; // The name of your pivot table

    protected $fillable = [
        'location_id',
        'book_id',
    ];

    public function location()
    {
        return $this->belongsTo(Location::class,'location_book');
    }

    public function book()
    {
        return $this->belongsTo(Book::class, 'activity_book');
    }
}
