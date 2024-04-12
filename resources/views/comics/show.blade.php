@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center py-5">{{$comic->title}}</h1>
        <div class="w-25 h-25 text-center d-flex">
            <img class="w-100" src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>
        <p class="py-3">{{$comic->description}}</p>
    </div>
    <div class="container">
        <button class="btn btn-warning mt-5"><a class="text-decoration-none text-black" href="{{route('comics.edit', $comic->id)}}">Modifica fumetto</a></button>
    </div>
@endsection