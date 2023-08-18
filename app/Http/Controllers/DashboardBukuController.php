<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardBukuController extends Controller
{
    public function index()
    {
        $buku = Buku::get();
        return view('dashboard.buku.data-buku', ['databuku' => $buku]);
    }

    public function index_dashboard()
    {
        $peminjaman = Peminjaman::count();
        $buku = Buku::count();
        $anggota = User::where('level', 'anggota')->count();
        return view('dashboard.index', compact('peminjaman', 'buku', 'anggota'));
    }

    public function index2()
    {
        $buku = Buku::get();
        return view('welcome', ['databuku' => $buku]);
    }

    public function welcome()
    {
        $databuku = Buku::get();
        $pinjam = Peminjaman::select('peminjaman.id' ,'users.kode_anggota', 'users.nama_anggota', 'buku.judul_buku', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'peminjaman.status', 'buku.stok')
        ->join('users', 'users.id', '=', 'peminjaman.userId')
        ->join('buku', 'buku.id', '=', 'peminjaman.bukuId')
        ->where('buku.stok', '>', 0)
        ->get();
        $minDate = Carbon::now();
        $minDate = $minDate->toDateString();
        return view('welcome_user', compact('databuku', 'pinjam', 'minDate'));
    }

    public function cetak($id)
    {
        $pinjam = Peminjaman::select('peminjaman.id' ,'users.kode_anggota', 'users.nama_anggota', 'buku.judul_buku', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'peminjaman.bukuId' , 'peminjaman.status', 'buku.stok', 'buku.rak')
        ->join('users', 'users.id', '=', 'peminjaman.userId')
        ->join('buku', 'buku.id', '=', 'peminjaman.bukuId')
        ->where('peminjaman.id', '=', $id)
        ->get();
        return view('user.surat_perijinan', compact('pinjam'));
    }

    public function add()
    {
        return view('dashboard.buku.addbuku');
    }
    public function store(Request $request)
    {
        // dd($request);
        $buku = new Buku;
        if ($request->hasFile('gambar')) {
            $file= $request->file('gambar');
            $ext = $request->file('gambar')->getClientOriginalExtension();
            $filename = 'gambar' . rand(1, 10000) . '.' . $ext;
            $file->move('gambar_buku/', $filename);
            $buku->kode_buku = $request->kode_buku;
            $buku->judul_buku = $request->judul_buku;
            $buku->deskripsi = $request->deskripsi;
            $buku->jenis_buku = $request->jenis_buku;
            $buku->tahun_terbit = $request->tahun_terbit;
            $buku->penerbit = $request->penerbit;
            $buku->rak = $request->rak;
            
            $buku->stok = $request->stok;
            $buku->gambar = $filename;
            $buku->save();
            return redirect()->route('databuku');
        }else{
            $massage = "Gambar Tidak Ada";
            return redirect()->back()->with('failed', $massage);
        }        
    }

    public function delete(Request $request)
    {
        $id = $request->id;

        $buku = new Buku();
        $buku->where('id', $id)->delete();

        return redirect()->route('databuku');
    }


    public function edit(Request $request, $id)
    {
        // return view('admin.supplier.editsupplier');
        $buku = buku::find($id);
        // dd($buku);
        return view('dashboard.buku.editbuku', compact('buku'));
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        $buku = buku::find($id);

        if ($request->hasFile('gambar')) {
            
            $file= $request->file('gambar');
            $ext = $request->file('gambar')->getClientOriginalExtension();
            $filename = $request->nama_pengaju . 'gambar' . rand(1, 10000) . '.' . $ext;
            $file->move('gambar_buku/', $filename);
            $buku->gambar = $filename;
            
        }
        $buku->kode_buku = $request->input('kode_buku');
        $buku->judul_buku = $request->input('judul_buku');
        $buku->jenis_buku = $request->input('jenis_buku');
        $buku->deskripsi = $request->input('deskripsi');
        $buku->tahun_terbit = $request->input('tahun_terbit');
        $buku->rak = $request->input('rak');
        $buku->stok = $request->input('stok');
        
        $buku->update();
        
        return redirect('data-buku');
    }

    public function kurangiStok($id)
    {
        $buku = Buku::find($id);
        
        if ($buku) {
            if ($buku->stok > 0) {
                $buku->stok -= 1;
                $buku->save();
                return "Stok barang dengan ID $id berhasil dikurangi.";
            } else {
                return "Stok barang dengan ID $id sudah habis.";
            }
        } else {
            return "Barang dengan ID $id tidak ditemukan.";
        }
    }
    
    public function search_book_name(Request $request)
    {
        $searchQuery = $request->input('search');
        $databuku = Buku::when($searchQuery, function ($query) use ($searchQuery) {
            return $query->where('judul_buku', 'like', '%' . $searchQuery . '%');
        })->get();
        $pinjam = Peminjaman::select('peminjaman.id' ,'users.kode_anggota', 'users.nama_anggota', 'buku.judul_buku', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'peminjaman.status', 'buku.stok')
        ->join('users', 'users.id', '=', 'peminjaman.userId')
        ->join('buku', 'buku.id', '=', 'peminjaman.bukuId')
        ->where('buku.stok', '>', 0)
        ->get();
        $minDate = Carbon::now();
        $minDate = $minDate->toDateString();
        
        return view('welcome_user', compact('databuku', 'pinjam', 'minDate'));
    }

    
}
