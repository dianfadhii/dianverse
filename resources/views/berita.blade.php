@extends('layouts.main')

@section('title', 'Berita | LARAVETI')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold text-primary">Berita Terbaru</h1>
    <p class="text-muted">Informasi dan pengumuman terkini seputar kampus dan kegiatan mahasiswa.</p>
</div>

<div class="row">
    @foreach ($beritas as $berita)
        <div class="col-md-4 mb-4">
            <div class="card berita-card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title fw-bold">{{ $berita['judul'] }}</h5>
                    <p class="text-muted small">Penulis: {{ $berita['penulis'] }}</p>
                    <p>{{ Str::limit($berita['isi'], 100) }}</p>

                    <a href="{{ url('/berita/' . $berita['slug']) }}" class="btn btn-outline-primary mt-auto">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
