<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kembali extends Model
{
    use HasFactory;
    protected $table = "kembali";
    protected $fillable = [
        'id',
        'kode_buku',
        'nama_anggota',
        'judul_buku',
        'tgl_pinjam',
        'tgl_kembali',
        'keterlambatan',
    ];
    protected $guarded = [];
}
