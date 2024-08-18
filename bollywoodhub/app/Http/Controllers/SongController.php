<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Movie;
use App\Http\Requests\StoreSongRequest;
use App\Http\Requests\UpdateSongRequest;
use Illuminate\Support\Facades\Session;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('songs.index' ,[
            'songs' => Song::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
           // Fetch all movies for the dropdown
    $movies = Movie::all();

    // Return the view for creating a new song
    return view('songs.create', compact('movies'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSongRequest $request)
    {
        $validatedData = $request->validated();

    // Create a new song record
    Song::create($validatedData);

    // Flash success message and redirect
    Session::flash('success', 'Song added successfully');
    return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song )
    {
         //$song = Song::find($id);
        $movie = $song -> movie;

        return view('songs.show', ['song' => $song, 'movie' => $movie]);
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {// Fetch all movies for the dropdown
    $movies = Movie::all();

    // Return the edit view with the song and movies
    return view('songs.edit', [
        'song' => $song,
        'movies' => $movies
    ]);
     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSongRequest $request, Song $song)
    {
        // Update the song record with validated data
        $song->update($request->validated());
    
        // Flash success message and redirect
        Session::flash('success', 'Song updated successfully');
        return redirect()->route('dashboard');
    }

    
    
    public function destroy(Song $song)
{
    $song->forceDelete(); // Permanently delete the song
    Session::flash('success', 'Song deleted successfully'); // Flash success message
    return redirect()->route('dashboard'); // Redirect to songs index
}




}
