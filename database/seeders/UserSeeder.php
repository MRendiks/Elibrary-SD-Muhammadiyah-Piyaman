<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'kode_anggota' => 'US1',
            'nama_anggota' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'jenis_kelamin' => 'Laki-Laki',
            'kelas' => '-',
            'level' => 'petugas',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('users')->insert([
            'kode_anggota' => 'US2',
            'nama_anggota' => 'Tarisa',
            'email' => 'tarisa@gmail.com',
            'password' => Hash::make('tarisa'),
            'jenis_kelamin' => 'Perempuan',
            'kelas' => '-',
            'level' => 'anggota',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
    }
}
