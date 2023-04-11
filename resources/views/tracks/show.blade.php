@extends('layouts.app')

@section('page-name', 'Dettaglio Canzone')

@section('content')
<div class="container d-flex justify-content-center">

<div class="card my-5 " >
       
    <div class="card-header">
        Titolo:  {{$track->title}}
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Album: {{$track->album}}</li>
        <li class="list-group-item">Autore: {{$track->author}}</li>
        <li class="list-group-item">Produttore: {{$track->editor}}</li>
        <li class="list-group-item">Lunghezza brano: {{$track->length}} minuti</li>
    </ul>   
  </div>
</div>
@endsection

