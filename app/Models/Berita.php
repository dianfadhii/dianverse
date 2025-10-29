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
            "isi" => "Ini adalah isi dari berita pertama. Kegiatan pembukaan acara Veo3: AI Video Challenge 2025 berlangsung meriah dengan partisipasi mahasiswa dari berbagai universitas."
        ],
        [
            "judul" => "Berita Kedua",
            "slug" => "berita-kedua",
            "penulis" => "Rizky Saputra",
            "isi" => "Berita kedua membahas tentang perkembangan teknologi informasi di bidang pendidikan. Himpunan Mahasiswa TI aktif mengadakan pelatihan terkait penggunaan AI dalam dunia akademik."
        ],
        [
            "judul" => "Berita Ketiga",
            "slug" => "berita-ketiga",
            "penulis" => "Aulia Rahman",
            "isi" => "Berita ketiga menyoroti keberhasilan mahasiswa dalam ajang kompetisi web development tingkat nasional. Tim dari Universitas Muhammadiyah Semarang berhasil meraih juara 1 berkat inovasi yang dibawakan."
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
