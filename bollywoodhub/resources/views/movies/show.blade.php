@extends('layouts/admin')
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
               Movie Details
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4  mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie -> movieName}} ({{ $movie -> year}})</h5>
                    <div class="card-text">
                    @if(filter_var($movie->imagepath, FILTER_VALIDATE_URL))
            <!-- For external URLs -->
            <img src="{{ $movie->imagepath }}" alt="{{ $movie->movieName }}">
        @else
            <!-- For local images -->
            <img src="{{ asset($movie->imagepath) }}" alt="{{ $movie->movieName }}">
        @endif

                    <p>{{ $movie -> overview}}</p>
                    <p>{{ $movie -> director}}</p>
                    <p>{{ $movie -> cast}}</p>
                    </div>
                    <a href="{{ route('movies.edit', $movie -> id ) }}" class="card-link">Edit</a>
                    <a href="{{ route('movies.trash', $movie -> id )}}" class="card-link">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
