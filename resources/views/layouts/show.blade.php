@extends('layouts.main')

@section('title', $berita->judul)

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm p-4 mb-4">
        <h2 class="fw-bold mb-3">{{ $berita->judul }}</h2>

        <p class="text-muted mb-4">
            <i class="bi bi-calendar-event me-1"></i>
            {{ $berita->created_at->format('d M Y, H:i') }}
        </p>

        <div class="berita-content mb-4">
            {!! nl2br(e($berita->isi)) !!}
        </div>

        <a href="{{ url('/berita') }}" class="btn btn-secondary">
            ← Kembali ke Daftar Berita
        </a>
    </div>
</div>
@endsection
