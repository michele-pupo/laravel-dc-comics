@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Modifica il fumetto</h1>

        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf

            @method('PUT')
            
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{$comic->title}}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="exampleInputEmail1" rows="8" name="description" required>{{$comic->description}}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Copertina</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="thumb" value="{{$comic->thumb}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{$comic->price}}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="series" value="{{$comic->series}}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data uscita</label>
                <input type="data" class="form-control" id="exampleInputEmail1" name="sale_date" value="{{$comic->sale_date}}">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="type" value="{{$comic->type}}">
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <textarea type="text" class="form-control" id="exampleInputEmail1" name="artists">{{$comic->artists}}</textarea>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <textarea type="text" class="form-control" id="exampleInputEmail1" name="writers">{{$comic->writers}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection