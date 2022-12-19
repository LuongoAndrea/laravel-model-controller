@extends('layaut.app')
@section('page-title', 'home')
@section('content')

<div class="d-flex container">
    <div class="row">
        @forelse ($movies as $key=>$movie)
        <div class="col-3 p-4">
            <div>
                <img src="{{$movie->image}}" alt="">
            </div>
            <div>
                <h3>{{$movie->title}}</h3>
            </div>
        </div>
        @empty
        <div>
            <p>nessun risultato</p>
        </div>
        @endforelse
    </div>
    {{-- <ul>
        @forelse ($movies as $key=>$movie)

        <li>{{$movie->title}}--{{$key}}</li>

        @empty
        <li>no risultati</li>
        @endforelse
    </ul> --}}
</div>

@endsection