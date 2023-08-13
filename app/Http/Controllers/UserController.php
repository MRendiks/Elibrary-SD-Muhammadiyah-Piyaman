<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Carbon\Carbon;
use App\Models\Buku;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function mainn(){
        return view('user.layot.mainn');

    }

    public function pinjam(Request $request)
    {
        $pinjam = new Peminjaman;
        $pinjam->userId = $request->userId;
        $pinjam->bukuId = $request->bukuId;
        $pinjam->tgl_pinjam = Carbon::now()->format('Y-m-d');
        $pinjam->tgl_kembali = $request->tgl_kembali;
        $pinjam->status = 'dipinjam';
        $pinjam->save();
        $buku = Buku::find($pinjam->bukuId);
        $buku->decrement('stok', 1);

        return redirect()->route('welcome');
    }
}
