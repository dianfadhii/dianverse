<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| File ini berisi definisi route utama untuk website LARAVETI.
| Setiap route diarahkan ke controller yang sesuai untuk
| mengatur tampilan dan logika halaman.
|
*/

// =====================
// 🏠 HALAMAN UTAMA (HOME)
// =====================

// URL: / (Halaman Welcome/Landing)
Route::get('/', [HomeController::class, 'index'])->name('welcome');

// URL: /home (Halaman Dashboard Utama)
Route::get('/home', [HomeController::class, 'home'])->name('home');

// =====================
// 🎓 DATA MAHASISWA
// =====================

// URL: /mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');

// =====================
// 📰 BERITA
// =====================

// URL: /berita (Daftar Berita)
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

// URL: /berita/{slug} (Detail Berita)
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');

// =====================
// 👤 PROFIL & KONTAK
// =====================

// URL: /profile
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

// URL: /contact
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
