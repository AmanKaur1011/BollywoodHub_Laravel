@extends('layouts.admin') <!-- Corrected to a dot notation for blade -->
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                View all Movies
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach($movies as $movie)
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->movieName }}</h5> <!-- Removed extra space -->
                    <a href="{{ route('movies.edit', $movie->id) }}" class="card-link">Edit</a> <!-- Removed extra space -->
                    <a href="{{ route('movies.trash', $movie->id) }}" class="card-link">Delete</a> <!-- Removed extra space -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
