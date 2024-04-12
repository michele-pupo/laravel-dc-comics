@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center py-5">{{$comic->title}}</h1>
        <div class="w-25 h-25 text-center d-flex">
            <img class="w-100" src="{{$comic->thumb}}" alt="{{$comic->title}}">
        </div>
        <p class="py-3">{{$comic->description}}</p>
    </div>
    <div class="container justify-content-center d-flex gap-5">
        <button class="btn btn-warning"><a class="text-decoration-none text-white" href="{{route('comics.edit', $comic->id)}}">Modifica</a></button>

        <button type="button" class="btn btn-danger px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina il fumetto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Sei proprio sicuro di voler eliminare il fumetto: {{$comic->title}}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">

                        @csrf

                        @method("DELETE")

                        <button class="btn btn-danger">Elimina</button>
                    </form>
                </div>
                </div>
            </div>
        </div>

        
    </div>
@endsection

