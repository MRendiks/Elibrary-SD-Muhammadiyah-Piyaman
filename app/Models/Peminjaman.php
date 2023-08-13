<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = "peminjaman";
    protected $fillable = [
        'id',
        'userId',
        'bukuId',
        'tgl_pinjam',
        'tgl_kembali',
        'status',
        'keterlambatan',
    ];
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function buku(){
        return $this->belongsTo(Buku::class);
    }
}
