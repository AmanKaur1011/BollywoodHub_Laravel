<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Movies') }}
        </h2>
    </x-slot>

    <!-- Header Section -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                @foreach($movies as $movie)
                    <div class="col-md-4 g-5">
                        <div class="card movies ">
                            <img src="{{$movie->imagepath}}" class="card-img-top " style="height:370px"
                                alt="movie cover picture">
                            <div class="card-body">
                                <h5 class="card-title fs-4 fw-normal"> {{$movie->movieName}} <i
                                        class="bi bi-music-note text-warning"></i></h5>
                               
                                <div class="card-text mt-3 d-flex justify-content-between">
                                    <a href="{{ route('movies.show', $movie->id) }}"
                                        class="btn btn-outline-primary ">Details</a>
                                        @if(auth()->user()->isAdmin())
                                        <a href="{{ route('movies.edit', $movie) }}" class="btn btn-outline-warning " data-bs-toggle="tooltip"  data-bs-title="Edit the Song "><i class="fa-solid fa-pen-to-square"></i></a>
                                        
                                        <form action="{{ route('movies.destroy', $movie) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this song?');">
                                             @csrf
                                         @method('DELETE')
                                         <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                                        </form>

                                        
                                        @endif
                                            </a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                

             
            </div>

        </div>
    </div>


</x-app-layout>



