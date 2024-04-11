@extends('layouts/app')

@section('content')
    
    <div class="container py-5">
        <h1 class="text-center">Lista dei fumetti</h1>
        @dump($comics)
        <div class="row row-cols-4 justify-content-between">
            @foreach ($comics as $comic)
            <div class="card h-100">
                <img src="{{$comic->thumb}}" class="card-img-top w-100 h-75 object-fit-cover" alt="{{$comic->title}}">
                <div class="comic-body text-center">
                    <h3 class="comic-title">{{$comic->title}}</h3>
                    <h4 class="comic-series">{{$comic->series}}</h4>
                    <h5 class="comic-date text-info">{{$comic->sale_date}}</h5>
                    <span class="comic-price text-danger ">{{$comic->price}}</span><br>
                    <a href="{{route('comics.show', $comic->id)}}">Visualizza</a>
                </div>
            </div>
            @endforeach
        </div>

        <button class="btn btn-primary"><a href="{{route('comics.create')}}">Aggiungi un fumetto</a></button>
        
    </div>

@endsection