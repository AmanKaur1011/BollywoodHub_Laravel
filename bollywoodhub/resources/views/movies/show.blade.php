

    <x-app-layout>
    <div class="container-fluid">
        <div class="container">
            <h1 class="display-4 mt-5 mb-5 pb-2 border-bottom border-black">Movie Details <i class="fa-solid fa-film"></i></h1>
            <div class="row align-items-center gap-5">
                
                <div class="col-md-auto  " >
                        <img src="{{$movie->imagepath}}" class="object-fit-fill w-100 rounded-4" height="400" alt="movie cover">
                      </div>
                      <div class="col-md-7">
                        <h2 class="display-5 mb-5">{{$movie->movieName}}  ({{$movie->year }})</h2>
                        <p>{{$movie->overview}}</p>
                        <p><span class="badge bg-secondary fs-6 mb-3 fw-normal"> Director :  </span> &nbsp; {{$movie->director}} </p>
                        <p><span class="badge bg-secondary fs-6 mb-3 fw-normal"> Cast :  </span> &nbsp;  {{$movie->cast}}</p>
                        <p><span class="badge bg-secondary fs-6 mb-3 fw-normal"> Genre :  </span> &nbsp;  {{$movie->genre}}</p>
                        @if(auth()->user()->isAdmin())
                        <div class="mt-4">
                          <a href="{{ route('movies.edit', $movie -> id ) }}" class="btn btn-outline-warning me-2">Edit Movie</a>
                          <form action="{{ route('movies.destroy', $movie) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this song?');">
                                             @csrf
                                         @method('DELETE')
                                         <button type="submit" class="btn btn-outline-danger">Delete Movie</button>
                                        </form>
                       </div>
                        @endif 

               
            </div>
        </div>
    </div>

    </x-app-layout>

