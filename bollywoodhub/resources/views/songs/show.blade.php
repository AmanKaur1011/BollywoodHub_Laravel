

    <x-app-layout>
    <div class="container-fluid">
        <div class="container">
            <h1 class="display-4 mt-5 mb-5 pb-2 border-bottom border-black">Song Details <i class="fa-solid fa-music text-warning"></i></h1>
            <div class="row align-items-center p-2  justify-content-around">
                
               <div  class=" col-md-5 rounded " >
               
                          <img src="{{$song->imagePath}}" class="object-fit-fill" height="400" alt="song cover">
                          
                       
                        
                        </div>
                      
                        <div class="col-md-auto">
                          <h2 class="display-5 mb-3">{{$song->songName}}</h2>
                          <div class="fs-5 mb-3">
                            <i class="fa-solid fa-film"></i>
                            <a href="{{ route('movies.show', $song -> movie_id ) }}" class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover text-bg-danger-subtle">{{ $movie-> movieName}}</a>
                          </div>
                          <div><span class="badge bg-secondary fs-6 mb-3 fw-normal"> Release Date :  </span> &nbsp;  {{ $song-> releaseDate}}</div>
                          <div><span class="badge bg-secondary fs-6 mb-3 fw-normal"> Singer :  </span>&nbsp; {{ $song-> singer}}</div>
                          <div><span class="badge bg-secondary fs-6 fw-normal"> Genre :  </span>&nbsp; {{ $song-> songGenre}}</div>
                          <div class="mt-3"><span class="badge bg-secondary fs-6 fw-normal "> User Rating :  </span>&nbsp;  {{ $song-> userRating}} &nbsp; <span><i class="fa-solid fa-star text-warning"></i></span> </div>
                          
                          @if(auth()->user()->isAdmin())
                          <div class="mt-4">
                          
                            <a href="{{ route('songs.edit', $song->id) }}" class="btn btn-outline-warning me-2">Edit Song</a>
                            
                            <form action="{{ route('songs.destroy', $song) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this song?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger">
                                                        Delete Song
                                                    </button>
                                                </form>
                           
                        </div>
                        @endif
                        </div>
                     
                     
            </div>
        </div>
    </div>
    </x-app-layout>

