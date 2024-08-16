<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('movies.index', [
            'movies' => Movie::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMovieRequest $request)
    {
        Movie::create($request->validated());

        Session::flash('success', 'Movie added successfully');
        return redirect() -> route('movies.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $movie->update($request->validated());
        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function  trashed()
    {
         return view('movies.trashed',[
        'movies' => Movie::onlyTrashed()->get()// equivalent to select * from students 
        ]);
    }
    public function trash($id)
    {
        Movie::Destroy($id);
        Session::Flash('success', 'Movie trashed successfully');
        return redirect() -> route('movies.index');
    }

    public function destroy($id)
    {
        $movie = Movie::withTrashed() -> where('id', $id) -> first();
        $movie -> forceDelete();
        Session::Flash('success', 'Movie deleted successfully');
        return redirect() -> route('movies.index');
    }

    public function restore($id)
    {
        $movie = Movie::withTrashed() -> where('id', $id) -> first();
        $movie -> restore();
        Session::Flash('success', 'Movie restored successfully');
        return redirect() -> route('movies.trashed');
    }

}
