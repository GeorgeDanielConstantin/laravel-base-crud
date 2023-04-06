@extends('layouts.app')

@section('page-name')
Canzoni
@endsection

@section('content')

<div class="container">
    <h1>Canzoni</h1>
    <div class="row g-5">
        @foreach($tracks as $track)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                <h5 class="card-title">Titolo: {{ $track->title}}</h5>
                <h5 class="card-title">Autore: {{ $track->author}}</h5>
                <h5 class="card-title">Album: {{ $track->album}}</h5>                
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection