<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Pinjam;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardPinjamController extends Controller
{
    public function index()
    {
        $pinjam = Peminjaman::select('peminjaman.id' ,'users.kode_anggota', 'users.nama_anggota', 'buku.judul_buku', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'peminjaman.status')
        ->join('users', 'users.id', '=', 'peminjaman.userId')
        ->join('buku', 'buku.id', '=', 'peminjaman.bukuId')
        ->where('peminjaman.status', '=', 'dipinjam')
        ->get();
        return view('dashboard.pinjam.data-pinjam', ['datapinjam' => $pinjam]);
    }

    public function add()
    {
        $user = User::get();
        $buku = Buku::get();
        return view('dashboard.pinjam.addpinjam', compact('user', 'buku'));
    }
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'kode_anggota' => 'required',
        //     'nama_anggota' => 'required',
        //     'judul_buku' => 'required',
        //     'tgl_pinjam' => 'required|max:255',
        //     'tgl_kembali' => 'required|date|after_or_equal:tgl_pinjam',
        // ], [
        //     "kode_anggota.required" => "Kode anggota belum diisi !",
        //     "nama_anggota.required" => "nama anggota belum diisi !",
        //     "judul_buku.required" => "judul buku belum diisi !",
        //     "tgl_pinjam.required" => "tgl pinjam belum diisi !",
        //     "tgl_kembali.required" => "tgl kembali tidak valid !",
        // ]);
        // dd($request);
        $pinjam = new Peminjaman;

            $pinjam->userId = $request->userId;
            $pinjam->bukuId = $request->bukuId;
            $pinjam->tgl_pinjam = $request->tgl_pinjam;
            $pinjam->tgl_kembali = $request->tgl_kembali;
            $pinjam->status = "dipinjam";
            
            $pinjam->save();

            $buku = Buku::find($pinjam->bukuId);
            $buku->decrement('stok', 1);
            return redirect()->route('datapinjam');
        // $buku = Buku::find($request->bukuId);
        // $stockExists = $buku->stock > 0;
        // if ($stockExists) {
            
        // }
        // else{
        //     return redirect()->route('datapinjam');
        // }
        
       
    }

    public function delete(Request $request)
    {
        $id = $request->id;

        $pinjam = new Peminjaman();
        $pinjam->where('id', $id)->delete();

        return redirect()->route('datapinjam');
    }


    public function edit(Request $request, $id)
    {
        // return view('admin.supplier.editsupplier');
        $pinjam= Peminjaman::find($id);
        $user = User::get();
        $buku = Buku::get();
        return view('dashboard.pinjam.editpinjam', compact('pinjam', 'user', 'buku'));
    }
    public function update(Request $request, $id)
    {

        // dd($request);
        
        $pinjam = Peminjaman::find($id);
        // $pinjam->userId = $request->input('userId');
        // $pinjam->bukuId = $request->input('bukuId');
        $pinjam->tgl_pinjam = $request->input('tgl_pinjam');
        $pinjam->tgl_kembali = $request->input('tgl_kembali');
        $pinjam->status = $request->input('status');

        $tgl_kembali = Carbon::parse($request->input('tgl_kembali')) ;
        
        $keterlambatan = Carbon::now()->diffInDays($tgl_kembali);
        if ($keterlambatan < 0) {
            $pinjam->keterlambatan = $keterlambatan;
        }
        $pinjam->update();


        return redirect('data-pinjam');
    }
}
