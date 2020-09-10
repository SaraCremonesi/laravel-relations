<h1>Lista Album</h1>
@foreach ($albums as $new_album)
  <h4>Titolo Album: {{ $new_album->title }}</h4>
  <ul>
    <li>Artista: {{ $new_album->artist }}</li>
    <li>Genere: {{ $new_album->genre }}</li>
    <li>Anno: {{ $new_album->year }}</li>
  </ul>
  <div>
    <a href="{{ route('album.show', $new_album) }}">Vai</a>
  </div>
@endforeach
