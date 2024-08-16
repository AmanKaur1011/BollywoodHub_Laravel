@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
               Song Details
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4  mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $song -> songName}} ({{ $song -> releaseDate}})</h5>
                    <div class="card-text">
                    @if(filter_var($song->imagePath, FILTER_VALIDATE_URL))
            <!-- For external URLs -->
            <img src="{{ $song->imagePath }}" alt="{{ $song->songName }}">
        @else
            <!-- For local images -->
            <img src="{{ asset($song->imagePath) }}" alt="{{ $song->songName }}">
        @endif

                    <p>{{ $song -> singer}}</p>
                    <p>{{ $song -> songGenre}}</p>
                    <p>{{ $song -> userRating}}</p>
                    <p>{{ $song -> videoId}}</p>
                    <a href="{{ route('movies.show', $song -> movie_id ) }}">{{ $movie-> movieName}}</a>
                    </div>
                    <a href="{{ route('songs.edit', $song -> id ) }}" class="card-link">Edit</a>
                    <a href="{{ route('songs.trash', $song -> id )}}" class="card-link">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
