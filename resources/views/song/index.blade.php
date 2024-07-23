@foreach ($musics as $music)
    <p>{{ $music->title }}</p>
    <audio controls>
        <source src="{{ route('music.show', $music->id) }}" type="audio/mpeg">
        Tarayıcınız audio etiketini desteklemiyor.
    </audio>
@endforeach
