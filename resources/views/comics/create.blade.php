@extends('layouts.app')

@section('content')

    <div class="container py-5">
        <h1 class="text-center">Aggiungi un nuovo fumetto</h1>


        <form action="{{route('comics.store')}}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{old('title')}}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" id="exampleInputEmail1" name="description">{{old('description')}}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Copertina</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="thumb" value="{{old('thumb')}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="price" value="{{old('price')}}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="series" value="{{old('series')}}">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data uscita</label>
                <input type="data" class="form-control" id="exampleInputEmail1" name="sale_date" value="{{old('sale_date')}}">
            </div>

            <div class="mb-3">
                <label for="tipe" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="tipe" value="{{old('tipe')}}">
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <textarea type="text" class="form-control" id="exampleInputEmail1" name="artists"></textarea value="{{old('artists')}}">
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <textarea type="text" class="form-control" id="exampleInputEmail1" name="writers"></textarea value="{{old('writers')}}">
            </div>

            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>

@endsection
