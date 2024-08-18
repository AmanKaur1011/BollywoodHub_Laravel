@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                Update Song
            </h1>
        </div>
    </div>
    <div class="row">
        <form action="{{ route('songs.update', $song -> id) }}" method="POST">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @method('PUT')
            {{ csrf_field() }}
           
            <div class="mb-3">
                <label for="songName" class="form-label">Song Name</label>
                <input type="text" class="form-control" id="songName" name="songName" value="{{$song->songName}}" required>
            </div>
            <div class="mb-3">
                <label for="singer" class="form-label">Singer</label>
                <input type="text" class="form-control" id="singer" name="singer" value="{{$song->singer}}" required>
            </div>
            <div class="mb-3">
                <label for="songGenre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="songGenre" name="songGenre" value="{{$song->songGenre}}" required>
            </div>
            <div class="mb-3">
                <label for="movie" class="form-label">Movie</label>
                <select class="form-control" id="movie" name="movie_id" required>
                    <option value="">Select a movie</option>
                    @foreach ($movies as $movie)
                        <option value="{{ $movie->id }}" {{ $song->movie_id == $movie->id ? 'selected' : '' }}>
                            {{ $movie->movieName }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="userRating" class="form-label">User Rating</label>
                <input type="text" class="form-control" id="userRating" name="userRating" value="{{$song->userRating}}" required>
            </div>
           
            <div class="mb-3">
                <label for="releaseDate" class="form-label">Release Date</label>
                <input type="date" class="form-control" id="releaseDate" name="releaseDate" value="{{$song->releaseDate}}" required>
            </div>
            <div class="mb-3">
                <label for="videoId" class="form-label">Song Youtube Video Id</label>
                <input type="text" class="form-control" id="videoId" name="videoId" value="{{$song->videoId}}">
            </div>
            <div class="mb-3">
                <label for="imagePath" class="form-label">Song Image URL</label>
                <input type="text" class="form-control" id="imagePath" name="imagePath" value="{{$song->imagePath}}"  required>
            </div>
            <button type="submit" class="btn btn-success mb-3"> Edit Song</button>
        </form>
    </div>
@endsection
 

