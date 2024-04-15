@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <h1 class="text-center">Modifica il fumetto</h1>

        <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf

            @method('PUT')
            
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="exampleInputEmail1" name="title" value="{{old('title') ?? $comic->title}}" required>
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="exampleInputEmail1" rows="8" name="description" required>{{old('description') ?? $comic->description}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
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
                <input type="data" class="form-control @error('sale_date') is-invalid @enderror" id="exampleInputEmail1" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}" required>
                @error('sale_date')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="exampleInputEmail1" name="type" value="{{old('type') ?? $comic->type}}" required>
                @error('type')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <textarea type="text" class="form-control" id="exampleInputEmail1" name="artists">{{$comic->artists}}</textarea>
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <textarea type="text" class="form-control @error('writers') is-invalid @enderror" id="exampleInputEmail1" name="writers">{{old('writers') ?? $comic->writers}}</textarea required>
                @error('writers')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Salva</button>
        </form>
    </div>
@endsection