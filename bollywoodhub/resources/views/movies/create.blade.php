    @extends('layouts/admin')
    @section('content')
        <div class="row">
            <div class="col">
                <h1 class="display-2">
                    Add a Movie
                </h1>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('movies.store') }}" method="post">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="movieId" class="form-label">Movie Id</label>
                    <input type="text" class="form-control" id="movieId" name="movieId" aria-describedby="movieId" required>
                </div>    
                <div class="mb-3">
                    <label for="movieName" class="form-label">Movie Name</label>
                    <input type="text" class="form-control" id="movieName" name="movieName" aria-describedby="movieName" required>
                </div>
                
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre"  aria-describedby="genre" required>
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Year of Release</label>
                    <input type="text" class="form-control" id="year" name="year" aria-describedby="year" required>
                </div>
                <div class="mb-3">
                    <label for="overview" class="form-label">Overview</label>
                    <input type="text" class="form-control" id="overview" name="overview"  aria-describedby="overview" required>
                </div>
                <div class="mb-3">
                    <label for="director" class="form-label">Director</label>
                    <input type="text" class="form-control" id="director" name="director" aria-describedby="director" required>
                </div>
                <div class="mb-3">
                    <label for="cast" class="form-label">Cast</label>
                    <input type="text" class="form-control" id="cast" name="cast" aria-describedby="cast" required>
                </div>
                
                <div class="mb-3">
                    <label for="imagepath" class="form-label">Movie Cover Image</label>
                    <input type="text" class="form-control" id="imagepath" name="imagepath"  aria-describedby="imagepath" required>
            
                </div>
            
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    @endsection
