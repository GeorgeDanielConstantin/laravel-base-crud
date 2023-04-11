@extends('layouts.app')

@section('page-name', 'Canzoni')


@section('content')

<h1>Canzoni</h1>

<section>

    <form class="d-flex my-3" role="search">
        <input class="form-control me-2" type="search" name="term" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
    </form>

    <div class="d-flex">
      <a href="{{ route('tracks.create') }}" type="button" class="btn btn-outline-primary ms-auto">Aggiungi Canzone</a>
    </div>

    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">titolo</th>
        <th scope="col">album</th>
        <th scope="col">autore</th>
        <th scope="col">produttore</th>
        <th scope="col">lunghezza canzone</th>
        <th scope="col">modifica</th>


        </tr>
    </thead>
    <tbody >
        @foreach ($tracks as $track)
        <tr >
        <td>{{$track->title}}</td>
        <td>{{$track->album}}</td>
        <td>{{$track->author}}</td>
        <td>{{$track->editor}}</td>
        <td>{{$track->length}}</td>
        <td>
            <a href="{{route('tracks.show', ['track' => $track])}}">Dettagli</a>
            <a href="{{route('tracks.edit', ['track' => $track])}}">Modifica</i></a>

            <button type="button" class="btn text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                elimina
            </button>


            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title" id="exampleModalLabel">conferma eliminazione</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        sicuro di voler eliminare il brano?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">annulla</button>

                            <form action="{{ route('tracks.destroy', $track) }}" method="POST">
                            @method('DELETE')
                            @csrf

                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </td>
        </tr> 
        @endforeach
    </tbody>
    </table>
</section>
@endsection