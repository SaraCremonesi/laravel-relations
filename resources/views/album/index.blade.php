@foreach ($albums as $album)
  <h4>Titolo Album: {{ $new_album->title }}</h4>
  <ul>
    <li>Artista: {{ $new_album->artist }}</li>
    <li>Genere: {{ $new_album->genre }}</li>
    <li>Anno: {{ $new_song->year }}</li>
  </ul>
  <div>
    <a href="{{ route('album.show', $album) }}">Vai</a>
  </div>
@endforeach
