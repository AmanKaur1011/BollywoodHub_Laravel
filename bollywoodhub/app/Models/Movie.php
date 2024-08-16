<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
class Movie extends Model
{
    use HasFactory;
    use  SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = [
        'movieId',
        'movieName',
        'year',
        'genre',
        'overview',
        'director',
        'cast',
        'imagepath'

    ];
// Define the relationship to Song
public function songs():BelongsToMany
{
    return $this->belongsToMany(Song::class);
}
}
