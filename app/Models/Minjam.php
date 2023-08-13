<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    use HasFactory;
    protected $table = "minjam";
    protected $fillable = [
        'id',
        'kode_anggota',
        'nama_anggota',
        'judul_buku',
        'tgl_pinjam',
        'tgl_kembali',
    ];
    protected $guarded = [];
}
