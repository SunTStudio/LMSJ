<?php

namespace Database\Seeders;

use App\Models\MataPelajaran;
use Illuminate\Database\Seeder;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Huruf Hiragana & Katakana',
                'kode' => 'HHK',
                'deskripsi' => 'Pengenalan huruf Hiragana & Katakana'
            ],
            [
                'nama' => 'Tata Bahasa (Bunpou) N5',
                'kode' => 'BN5',
                'deskripsi' => 'Dasar-dasar struktur kalimat bahasa Jepang level N5',
            ],
            [
                'nama' => 'Kanji Dasar',
                'kode' => 'KJD',
                'deskripsi' => 'Pengenalan karakter Kanji untuk pemula',
            ],
            [
                'nama' => 'Kosakata (Kotoba)',
                'kode' => 'KOT',
                'deskripsi' => 'Kumpulan kosakata penting sehari-hari',
            ],
            [
                'nama' => 'Percakapan (Kaiwa)',
                'kode' => 'KW',
                'deskripsi' => 'Latihan percakapan praktis bahasa Jepang',
            ],
        ];

        foreach ($data as $item) {
            MataPelajaran::create($item);
        }
    }
}