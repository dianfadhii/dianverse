<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrtitaController extends Controller
{
    public function index() (
        return view('berita', [
            "title" => "berita",
            "beritas" => Berita::ambildata(),
        ]);
    )
}
