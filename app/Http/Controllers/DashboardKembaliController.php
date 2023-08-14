<?php

namespace App\Http\Controllers;

use App\Models\Kembali;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class DashboardKembaliController extends Controller
{
    public function index()
    {
        $kembali = Peminjaman::select('peminjaman.id' ,'users.kode_anggota', 'users.nama_anggota', 'buku.judul_buku', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'peminjaman.status', 'peminjaman.keterlambatan')
        ->join('users', 'users.id', '=', 'peminjaman.userId')
        ->join('buku', 'buku.id', '=', 'peminjaman.bukuId')
        ->where('peminjaman.status', '=', 'dikembalikan')
        ->get();
        $filter = [
            'bulan' => "",
            "tahun" => ""
        ];
        return view('dashboard.kembali.data-kembali', ['datakembali' => $kembali, 'filter'=>$filter]);
    }

    public function filter_kembali(Request $request)
    {
        $filter = [
            'bulan' => "",
            "tahun" => ""
        ];

        $filter['bulan'] = $request->input('bulan');
        $filter['tahun'] = $request->input('tahun');
        $datakembali = Peminjaman::select('peminjaman.id' ,'users.kode_anggota', 'users.nama_anggota', 'buku.judul_buku', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'peminjaman.status', 'peminjaman.keterlambatan')
        ->join('users', 'users.id', '=', 'peminjaman.userId')
        ->join('buku', 'buku.id', '=', 'peminjaman.bukuId')
        ->whereMonth('tgl_pinjam', $filter['bulan'])
        ->whereYear('tgl_pinjam', $filter['tahun'])->get()
        ->where('status', '=', 'dikembalikan');
        
        return view('dashboard.kembali.data-kembali', compact('datakembali', 'filter'));

    }

    public function cetak_kembali(Request $request)
    {  
        $query = Peminjaman::query();
        $query->select('peminjaman.id' ,'users.kode_anggota', 'users.nama_anggota', 'buku.judul_buku', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'peminjaman.status', 'peminjaman.keterlambatan');
        $query->join('users', 'users.id', '=', 'peminjaman.userId');
        $query->join('buku', 'buku.id', '=', 'peminjaman.bukuId');
        $query->where('status', '=', 'dikembalikan');
        if(!is_null($request->input('tahun'))){
            $filter['tahun'] = $request->input('tahun');
            $year = $request->input('tahun');
            $query->whereYear('tgl_pinjam', $year);
        }
        if(!is_null($request->input('bulan'))){
            $filter['bulan'] = $request->input('bulan');
            $month = $request->input('bulan');
            $query->whereMonth('tgl_pinjam', $month);
        }

        $datakembali = $query->get();
        
        return view('dashboard.kembali.laporan_cetak', compact('datakembali'));
    }

    // public function add()
    // {
    //     return view('dashboard.kembali.addkembali');
    // }
    // public function store(Request $request)
    // {
    //     // dd($request);
    //     $kembali = new Kembali;

    //     $kembali->kode_buku = $request->kode_buku;
    //     $kembali->nama_anggota = $request->nama_anggota;
    //     $kembali->judul_buku = $request->judul_buku;
    //     $kembali->tgl_pinjam = $request->tgl_pinjam;
    //     $kembali->tgl_kembali = $request->tgl_kembali;
    //     $kembali->keterlambatan = $request->keterlambatan;

    //     $kembali->save();
    //     return redirect()->route('datakembali');
    // }

    // public function delete(Request $request)
    // {
    //     $id = $request->id;

    //     $kembali = new Kembali();
    //     $kembali->where('id', $id)->delete();

    //     return redirect()->route('datakembali');
    // }


    // public function edit(Request $request, $id)
    // {
    //     // return view('admin.supplier.editsupplier');
    //     $kembali = Kembali::find($id);
    //     return view('dashboard.kembali.editkembali', compact('kembali'));
    // }
    // public function update(Request $request, $id)
    // {
    //     // dd($request);
    //     $kembali = Kembali::find($id);
    //     $kembali->kode_buku = $request->input('kode_buku');
    //     $kembali->nama_anggota = $request->input('nama_anggota');
    //     $kembali->judul_buku = $request->input('judul_buku');
    //     $kembali->tgl_pinjam = $request->input('tgl_pinjam');
    //     $kembali->tgl_kembali = $request->input('tgl_kembali');
    //     $kembali->keterlambatan = $request->input('keterlambatan');
    //     $kembali->update();

    //     return redirect('data-kembali');
    // }
}
