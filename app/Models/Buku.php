<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = "buku";
    protected $fillable = [
        'id',
        'kode_buku',
        'judul_buku',
        'jenis_buku',
        'tahun_terbit',
        'penerbit',
        'rak',
        'stok',
        'gambar'
    ];
    protected $guarded = [];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
