@extends('layouts.app')

@section('page-name', 'Aggiungi canzone')

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
<h2 class="my-3">Aggiungi nuova canzone</h2>

<form action="{{ route('tracks.store') }}" method="POST" class="row g-3">
    @csrf
        <div class="col-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>

        <div class="col-3">
            <label for="album" class="form-label">Album</label>
            <input type="text" class="form-control" id="album" name="album" value="{{ old('album') }}">
        </div>

        <div class="col-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ old('author') }}">
        </div>

        <div class="col-3">
            <label for="editor" class="form-label">Produttore</label>
            <input type="text" class="form-control" id="editor" name="editor" value="{{ old('editor') }}">
        </div>

        <div class="col-3">
            <label for="length" class="form-label">Lunghezza canzone</label>
            <input type="text" class="form-control" id="length" name="length" value="{{ old('length') }}">
        </div>

        <div class="d-flex align- items-center justify-content-center text-center">
           <div> 
            <button type="submit" class="btn btn-outline-primary ms-auto">Salva</button>
            </div>
        </div>
    </form>
</div>

@endsection