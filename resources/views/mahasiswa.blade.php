@extends('layouts.main')

@section('title', 'Data Mahasiswa | LARAVETI')

@section('content')
<div class="container">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">Data Mahasiswa</h1>
        <p class="text-muted">Berikut adalah daftar mahasiswa yang terdaftar di LARAVETI.</p>
    </div>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="fw-semibold">Daftar Mahasiswa</h5>
        <button type="button" class="btn btn-success shadow-sm">
            <i class="bi bi-plus-circle me-1"></i> Tambah Data
        </button>
    </div>

    <div class="table-responsive shadow-sm rounded">
        <table class="table table-bordered table-striped align-middle mb-0">
            <thead class="table-primary text-center">
                <tr>
                    <th scope="col" style="width: 5%;">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Email</th>
                    <th scope="col">No. HP</th>
                    <th scope="col" style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mahasiswas as $index => $mhs)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $mhs->name }}</td>
                    <td>{{ $mhs->NIM }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>{{ $mhs->nohp }}</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-primary btn-sm me-1 shadow-sm">
                            <i class="bi bi-pencil-square"></i> Edit
                        </button>
                        <button type="button" class="btn btn-danger btn-sm shadow-sm">
                            <i class="bi bi-trash3"></i> Hapus
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
