@extends('layouts/admin')
@section('content')

<div class="row">
    <div class="col">
        <h1 class="display-2">
             Deleted Songs 
        </h1>
    </div>
</div>
<div class="row">
    <div class="col">
        @foreach ($songs as $song)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $song -> songName}} {{ $song -> year}}
                    </h5>
                    <a href="{{ route('songs.restore', $song -> id) }}" class="card-link">Restore</a>
                   
                    <form action="{{route('songs.destroy', [$song -> id] )}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <button type="submit">Delete</button>


                    </form>
                </div>

            </div>
        </div>
           
        @endforeach
    </div>
</div>
@endsection

