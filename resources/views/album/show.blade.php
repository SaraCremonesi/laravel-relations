<h1>Lista canzoni</h1>
@foreach ($album->songs as $new_song)
    <h3>Titolo: {{ $new_song->title }}</h3>
    <p>{{ $new_song->minutes }} minuti</p>
  <div>
    <a href="{{ route('album.listen', $new_song) }}">Ascolta</a>
    <hr>
    {{-- Come completare il controller per inserire un'ulteriore link? --}}
  </div>
@endforeach
