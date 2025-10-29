<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Menampilkan halaman Profile / Tentang Kami.
     */
    public function show()
    {
        return view('profile', [
            'title' => 'Profil LARAVETI'
        ]);
    }
}
