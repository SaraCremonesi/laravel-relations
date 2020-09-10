@foreach ($album->songs as $song)
  <ul>
    <li>Titolo: {{ $new_song->title }} minuti</li>
  </ul>
  <div>
    <a href="{{ route('song.show', $song) }}">Ascolta</a>
    {{-- Come completare il controller per inserire un'ulteriore link? --}}
  </div>
@endforeach
