@extends('layouts/app')

@section('content')
    
    <div class="container py-5">
        <h1 class="text-center pb-4 display-1 fw-bold text-uppercase">Lista fumetti</h1>
        <div class="row row-cols-6 justify-content-start row-gap-2">
            @foreach ($comics as $comic)
            <div class="card h-auto d-flex flex-column justify-content-between p-2 border-3 border-danger">
                <div>
                    <img src="{{$comic->thumb}}" class="card-img-top w-100 object-fit-cover" alt="{{$comic->title}}">
                    <div class="comic-body text-center">
                        <h3 class="comic-title">{{$comic->title}}</h3>
                        <h4 class="comic-series">{{$comic->series}}</h4>
                        <h5 class="comic-date text-info">{{$comic->sale_date}}</h5>
                        <h6 class="comic-price text-danger pb-4">{{$comic->price}}</h6>
                    </div>
                </div>
                <button class="btn btn-info"><a class="text-decoration-none text-black" href="{{route('comics.show', $comic->id)}}">Visualizza</a></button>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center">
            <button class="btn btn-primary mt-5"><a class="text-decoration-none " href="{{route('comics.create')}}">Aggiungi un fumetto</a></button>
        </div>

    </div>

@endsection