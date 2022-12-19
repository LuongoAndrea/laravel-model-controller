@extends('layaut.app')
@section('page-title', 'home')
@section('content')

<div class="d-flex container comics-cards">
    <ul>
        @forelse ($movies as $key=>$movie)

        <li>{{$movie->title}}--{{$key}}</li>

        @empty
        <li>no risultati</li>
        @endforelse
    </ul>
</div>

@endsection