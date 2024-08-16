<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Song extends Model
{
    use HasFactory;
    use  SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'songName',
        'singer',
        'userRating',
        'imagePath',
        'videoId',
        'songGenre',
        'releaseDate',
        'movie_id'
    ];
     // Define the relationship to Movie
     public function movie():BelongsTo
     {
         return $this->belongsTo(Movie::class);
     }

}
