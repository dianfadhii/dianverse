@extends('layouts.main')

@section('title', 'Welcome | LARAVETI')

@section('content')
<div class="text-center my-5">
    <h1 class="fw-bold text-primary">Selamat Datang di Website LARAVETI 🎉</h1>
    <p class="lead text-muted">Platform manajemen mahasiswa berbasis Laravel.</p>
    <a href="{{ url('/home') }}" class="btn btn-primary mt-3">Masuk ke Halaman Utama</a>
</div>
@endsection
