<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->insert([
            'kode_buku' => 'KB1',
            'judul_buku' => 'Dongeng Aneka Hewan Laut',
            'jenis_buku' => 'Buku Baca',
            'tahun_terbit' => '2006',
            'penerbit' => 'UTY',
            'rak' => '7',
            'stok' => 6,
            'gambar' => 'bk.jpg',
        ]);
        DB::table('buku')->insert([
            'kode_buku' => 'KB2',
            'judul_buku' => 'Ilmu Pengetahuan Alam',
            'jenis_buku' => 'Buku Pelajaran',
            'tahun_terbit' => '2009',
            'penerbit' => 'UTY',
            'rak' => '2',
            'stok' => 10,
            'gambar' => 'buku2.jpg',
        ]);
        DB::table('buku')->insert([
            'kode_buku' => 'KB3',
            'judul_buku' => 'Ayo Sholat',
            'jenis_buku' => 'Buku Baca',
            'tahun_terbit' => '20015',
            'penerbit' => 'UTY',
            'rak' => '5',
            'stok' => 6,
            'gambar' => 'buku3.jpg',
        ]);
        DB::table('buku')->insert([
            'kode_buku' => 'KB4',
            'judul_buku' => 'Dongeng Tentang Ayam',
            'jenis_buku' => 'Buku Baca',
            'tahun_terbit' => '2011',
            'penerbit' => 'UTY',
            'rak' => '8',
            'stok' => 6,
            'gambar' => 'buku4.jpg',
        ]);
        DB::table('buku')->insert([
            'kode_buku' => 'KB5',
            'judul_buku' => 'Si kancil Yang Cerdik',
            'jenis_buku' => 'Buku Baca',
            'tahun_terbit' => '2014',
            'penerbit' => 'UTY',
            'rak' => '10',
            'stok' => 6,
            'gambar' => 'buku5.jpg',
        ]);
        DB::table('buku')->insert([
            'kode_buku' => 'KB6',
            'judul_buku' => 'Dongeng Asal Usul Binatang',
            'jenis_buku' => 'Buku Baca',
            'tahun_terbit' => '2016',
            'penerbit' => 'UTY',
            'rak' => '12',
            'stok' => 6,
            'gambar' => 'buku6.jpg',
        ]);
        DB::table('buku')->insert([
            'kode_buku' => 'KB7',
            'judul_buku' => 'Matematika Untuk SD/MI kelas 3',
            'jenis_buku' => 'Buku Pelajaran',
            'tahun_terbit' => '2007',
            'penerbit' => 'UTY',
            'rak' => '3',
            'stok' => 7,
            'gambar' => 'buku7.jpg',
        ]);
        DB::table('buku')->insert([
            'kode_buku' => 'KB8',
            'judul_buku' => 'Doa-Doa Harian Anak Muslim',
            'jenis_buku' => 'Buku Baca',
            'tahun_terbit' => '2018',
            'penerbit' => 'UTY',
            'rak' => '1',
            'stok' => 6,
            'gambar' => 'buku8.jpg',
        ]);
        DB::table('buku')->insert([
            'kode_buku' => 'KB9',
            'judul_buku' => 'Menolong Yuki',
            'jenis_buku' => 'Buku Baca',
            'tahun_terbit' => '2007',
            'penerbit' => 'UTY',
            'rak' => '3',
            'stok' => 6,
            'gambar' => 'buku9.jpg',
        ]);
        DB::table('buku')->insert([
            'kode_buku' => 'KB10',
            'judul_buku' => 'Kisah Teladan 25 Nabi Dan Rasul',
            'jenis_buku' => 'Buku Baca',
            'tahun_terbit' => '2007',
            'penerbit' => 'UTY',
            'rak' => '3',
            'stok' => 6,
            'gambar' => 'buku10.jpg',
        ]);
        DB::table('buku')->insert([
            'kode_buku' => 'KB11',
            'judul_buku' => 'Cerita Rakyat Nusantara',
            'jenis_buku' => 'Buku Baca',
            'tahun_terbit' => '2007',
            'penerbit' => 'UTY',
            'rak' => '3',
            'stok' => 6,
            'gambar' => 'buku11.jpg',
        ]);
        DB::table('buku')->insert([
            'kode_buku' => 'KB12',
            'judul_buku' => 'Pendidikan Agama Islam dan Budi Pekerti Kelas 1',
            'jenis_buku' => 'Buku Baca',
            'tahun_terbit' => '2013',
            'penerbit' => 'UTY',
            'rak' => '16',
            'stok' => 6,
            'gambar' => 'buku12.jpg',
        ]);
    }
}
