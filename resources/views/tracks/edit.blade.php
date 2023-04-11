@extends('layouts.app')

@section('page_name', 'Modifica Canzone')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="container">
    <form action="{{ route('tracks.update', $track) }}" method="POST" class="row g-3 text-light">
        @csrf
        @method('PUT')

        <div class="col-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title') ?? $track->title}}">
            <div class="invalid-feedback">
                Inserire 'Titolo'
            </div>
        </div>

        <div class="col-3">
            <label for="album" class="form-label">Album</label>
            <input type="text" class="form-control @error('album') is-invalid @enderror" id="album" name="album" value="{{old('album') ?? $track->album}}">
            <div class="invalid-feedback">
                Inserire testo in 'Album'
            </div>
        </div>

        <div class="col-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{old('author') ?? $track->author}}">
            <div class="invalid-feedback">
               Inserire testo in 'Autore'
            </div>
        </div>

        <div class="col-3">
            <label for="editor" class="form-label">Editore</label>
            <input type="text" class="form-control @error('editor') is-invalid @enderror" id="editor" name="editor" value="{{old('editor') ?? $track->editor}}">
            <div class="invalid-feedback">
                Inserire testo in 'Produttore'
            </div>
        </div>

        <div class="col-3">
            <label for="length" class="form-label">Durata</label>
            <input type="text" class="form-control @error('length') is-invalid @enderror" id="length" name="length" value="{{old('length') ?? $track->length}}">
            <div class="invalid-feedback">
                Durata tipo 00:00:00
            </div>
        </div>

        <div class="col-12 d-flex">
            <button type="submit" class="btn btn-outline-primary me-auto my-5">Salva</button>
        </div>
    </form>
    </div>
@endsection