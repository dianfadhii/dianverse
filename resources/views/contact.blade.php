@extends('layouts.main')

@section('title', 'Contact | LARAVETI')

@section('content')
<div class="text-center mb-5">
    <h1 class="fw-bold text-primary">Hubungi Kami</h1>
    <p class="text-muted">Silakan isi form berikut untuk mengirim pesan kepada tim kami.</p>
</div>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card p-4 shadow-sm">
            <form>
                <div class="mb-3">
                    <label for="nama" class="form-label fw-bold">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan nama Anda">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label fw-bold">Pesan</label>
                    <textarea class="form-control" id="pesan" rows="4" placeholder="Tulis pesan Anda"></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Kirim Pesan</button>
            </form>
        </div>
    </div>
</div>
@endsection
