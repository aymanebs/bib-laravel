<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    // protected $table ='books';

    protected $fillable = [
        'title',
        'author',
        'genre',
        'description',
        'edition',
        'total_copies',
        'avaible_copies',
    ];

    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}

