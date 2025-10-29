<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman welcome/index.
     */
    public function index()
    {
        return view('welcome', [
            'title' => 'Welcome | LARAVETI'
        ]);
    }

    /**
     * Menampilkan halaman Home utama.
     */
    public function home()
    {
        return view('home', [
            'title' => 'Dashboard Utama'
        ]);
    }

    /**
     * Menampilkan halaman Contact Us.
     */
    public function contact()
    {
        return view('contact', [
            'title' => 'Hubungi Kami'
        ]);
    }
}
