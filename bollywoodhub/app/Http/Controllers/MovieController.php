<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class MovieController extends Controller
{
    use AuthorizesRequests;
    // public function __construct()
    // {
    //     $this->authorizeResource(Movie::class, 'movie');
    // }

    public function index()
    {
        return view('movies.index', [
            'movies' => Movie::all()
        ]);
    }

    public function create()
    {
        $this->authorize('create', Movie::class);
        return view('movies.create');
    }

    public function store(StoreMovieRequest $request)
    {
        $this->authorize('create', Movie::class);
        Movie::create($request->validated());
        Session::flash('success', 'Movie added successfully');
        return redirect()->route('movies.index');
    }

    public function show(Movie $movie)
    {
        
        return view('movies.show', compact('movie'));
    }

    public function edit(Movie $movie)
    {
        $this->authorize('update', $movie);
        return view('movies.edit', compact('movie'));
    }

    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $this->authorize('update', $movie);
        $movie->update($request->validated());
        Session::flash('success', 'Movie Updated successfully');
        return redirect()->route('movies.index');
    }

   

   

    public function destroy(Movie $movie)
    {
        
        $this->authorize('forceDelete', $movie);
        $movie->forceDelete();
        Session::flash('success', 'Movie deleted Successfully');
        return redirect()->route('movies.index');
    }

    
}