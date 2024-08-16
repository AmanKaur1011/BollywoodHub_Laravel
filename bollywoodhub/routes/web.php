<?php

use Illuminate\Support\Facades\Route;
use app\Models\Movie;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SongController;

Route::get('/', function () {
    return view('welcome');
});
Route::get(
    'movies/trash/{id}',
    [MovieController::class, 'trash']
)->name('movies.trash');

Route::get(
'movies/trashed/',
[MovieController::class, 'trashed']
)->name('movies.trashed');

Route::get(
'movies/restore/{id}',
[MovieController::class, 'trash']
)->name('movies.restore');


Route::resource('movies', MovieController::class);

Route::get(
    'songs/trash/{id}',
    [SongController::class, 'trash']
)->name('songs.trash');

Route::get(
'songs/trashed/',
[SongController::class, 'trashed']
)->name('songs.trashed');

Route::get(
'songs/restore/{id}',
[SongController::class, 'restore']
)->name('songs.restore');


Route::resource('songs', SongController::class);