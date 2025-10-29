@extends('layouts.main')

@section('title', $berita['judul'] . ' | LARAVETI')

@section('content')
<div class="text-center mb-4">
    <h1 class="fw-bold text-primary">{{ $berita['judul'] }}</h1>
    <p class="text-muted">{{ $berita['tanggal'] }}</p>
</div>

<img src="{{ $berita['gambar'] }}" class="img-fluid rounded mb-4" alt="{{ $berita['judul'] }}">

<p class="fs-5 lh-lg text-justify">{{ $berita['isi'] }}</p>

<div class="text-center mt-5">
    <a href="{{ url('/berita') }}" class="btn btn-primary">⬅️ Kembali ke Daftar Berita</a>
</div>
@endsection
