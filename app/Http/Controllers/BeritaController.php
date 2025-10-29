<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    /**
     * Menampilkan daftar berita.
     */
    public function index()
    {
        $beritas = Berita::all();

        // Kirim data ke view resources/views/berita.blade.php
        return view('berita', [
            'title' => 'Daftar Berita',
            'beritas' => $beritas
        ]);
    }

    /**
     * Menampilkan detail berita berdasarkan slug.
     */
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        return view('berita-detail', [
            'title' => $berita->judul,
            'berita' => $berita
        ]);
    }
}
