@extends('layouts.main')

@section('title', 'Profile | LARAVETI')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold text-primary">Profil LARAVETI</h1>
    <p class="lead text-muted">Tentang Kami</p>
</div>

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card p-4 shadow-sm">
            <h4 class="fw-bold text-primary">Visi</h4>
            <p>Menjadi sistem informasi akademik modern yang mendukung transparansi dan efisiensi pendidikan berbasis teknologi.</p>

            <h4 class="fw-bold text-primary mt-3">Misi</h4>
            <ul>
                <li>Meningkatkan efisiensi pengelolaan data mahasiswa.</li>
                <li>Memberikan akses informasi yang mudah dan cepat.</li>
                <li>Mendukung inovasi digital di lingkungan kampus.</li>
            </ul>

            <h4 class="fw-bold text-primary mt-3">Developer</h4>
            <p>Dikembangkan oleh Tim Pengembang Teknologi Informasi Universitas Muhammadiyah Semarang.</p>
        </div>
    </div>
</div>
@endsection
