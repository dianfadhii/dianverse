@dd($new_berita)

extends('layouts.app')

@section('title', 'single berita')

@section('content')
  <article>
      <h1>{{ $new_berita["judul"] }}</h1>
      <h3>{{ $new_berita["penulis"] }}</h3>
      <p>{{ $new_berita["konten"] }}<p>
</article>
@endsection