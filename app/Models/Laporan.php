<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = "laporan";
    protected $fillable = [
        'id',
        'kode_buku',
        'judul_buku',
        'penerbit',
        'status',
    ];
    protected $guarded = [];
}
