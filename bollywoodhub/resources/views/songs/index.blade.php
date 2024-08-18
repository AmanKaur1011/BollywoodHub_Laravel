@extends('layouts.admin') <!-- Corrected to a dot notation for blade -->
@section('content')
    <div class="row">
        <div class="col">
            <h1 class="display-2">
                View all Songs
            </h1>
        </div>
    </div>
    <div class="row">
        @foreach($songs as $song)
        <div class="col-md-4 mb-3">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $song->songName }}</h5> <!-- Removed extra space -->
                    @if(auth()->user()->isAdmin())
                <a href="{{ route('songs.edit', $song->id) }}" class="card-link">Edit</a>
                <form action="{{ route('songs.destroy', $song) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this song?');">
                 @csrf
                @method('DELETE')
                <button type="submit" class="text-red-500 hover:text-red-700">
                 Delete
                </button>
                </form>
                @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
