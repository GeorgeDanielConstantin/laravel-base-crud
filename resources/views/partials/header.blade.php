<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('tracks.index')}}">{{env('APP_NAME')}}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{-- {{ route('Canzoni')}} --}}">Canzoni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Playlist</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Artisti</a>
        </li>
      </ul>
    </div>
  </div>
</nav>