<?php

namespace App\Models;

class Berita
{
    // Contoh data statis (biasanya nanti diganti ambil dari database)
    private static $data_berita = [
        [
            "judul" => "Berita Pertama",
            "slug" => "berita-pertama",
            "penulis" => "Dian Fadhilah",
            "isi" => "Ini adalah isi dari berita pertama."
        ],
        [
            "judul" => "Berita Kedua",
            "slug" => "berita-kedua",
            "penulis" => "Rizky Saputra",
            "isi" => "Ini adalah isi dari berita kedua."
        ]
    ];

    public static function all()
    {
        return collect(self::$data_berita);
    }

    public static function caridata($slug)
    {
        $data_berita = self::$data_berita;
        $new_berita = [];

        foreach ($data_berita as $berita) {
            if ($berita["slug"] === $slug) {
                $new_berita = $berita;
                break; // keluar dari loop setelah ditemukan
            }
        }

        return $new_berita;
    }
}