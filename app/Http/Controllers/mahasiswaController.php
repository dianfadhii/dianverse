<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Ambil semua data mahasiswa
        $mahasiswas = Mahasiswa::all();
        $title = 'Data Mahasiswa';

        // Kirim ke view dengan compact
        return view('mahasiswa', compact('mahasiswas', 'title'));
    }
}
