@extends('layouts.main')

@section('title', 'Index | LARAVETI')

@section('content')
<div class="text-center my-5">
    <h1 class="fw-bold text-primary">Selamat Datang di Halaman Index</h1>
    <p class="lead">Gunakan navigasi di atas untuk menjelajahi website ini.</p>
    <a href="{{ url('/home') }}" class="btn btn-outline-primary mt-3">Pergi ke Home</a>
</div>
@endsection
