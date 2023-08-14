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

        $filter = [
            'bulan' => "",
            "tahun" => ""
        ];

        return view('dashboard.pinjam.data-pinjam', ['datapinjam' => $pinjam, 'filter'=>$filter]);
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
            
            

            $buku = Buku::find($pinjam->bukuId);
            if ($buku) {
                if ($buku->stok > 0) {
                    $buku->decrement('stok', 1);
                    $pinjam->save();
                    return redirect()->route('datapinjam')->with('success', 'Data Berhasil Dipinjam');
                } else {
                    return redirect()->route('datapinjam')->with('failed', 'Data Tidak Berhasil Dipinjam, Stok Habis');
                }
            } else {
                return redirect()->route('datapinjam')->with('failed', 'Data Tidak Berhasil Dipinjam, Buku Tidak ada');
            }
            
            // return redirect()->route('datapinjam');
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
        $pinjam->tgl_pinjam = $request->input('tgl_pinjam');
        $pinjam->tgl_kembali = $request->input('tgl_kembali');
        $pinjam->status = $request->input('status');

        $tgl_kembali = Carbon::parse($request->input('tgl_kembali')) ;
        
        $keterlambatan = Carbon::now()->diffInDays($tgl_kembali);
        if ($keterlambatan > 0) {
            $pinjam->keterlambatan = $keterlambatan;
        }else{
            $pinjam->keterlambatan = 0;
        }
        $pinjam->update();
        return redirect('data-kembali');
    }

    public function filter_pinjam(Request $request)
    {
        $filter = [
            'bulan' => "",
            "tahun" => ""
        ];

        $filter['bulan'] = $request->input('bulan');
        $filter['tahun'] = $request->input('tahun');
        $datapinjam = Peminjaman::select('peminjaman.id' ,'users.kode_anggota', 'users.nama_anggota', 'buku.judul_buku', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'peminjaman.status')
        ->join('users', 'users.id', '=', 'peminjaman.userId')
        ->join('buku', 'buku.id', '=', 'peminjaman.bukuId')
        ->whereMonth('tgl_pinjam', $filter['bulan'])
        ->whereYear('tgl_pinjam', $filter['tahun'])->get()
        ->where('status', '=', 'dipinjam');
        
        return view('dashboard.pinjam.data-pinjam', compact('datapinjam', 'filter'));

    }

    public function cetak_pinjam(Request $request)
    {  
        $query = Peminjaman::query();
        $query->select('peminjaman.id' ,'users.kode_anggota', 'users.nama_anggota', 'buku.judul_buku', 'peminjaman.tgl_pinjam', 'peminjaman.tgl_kembali', 'peminjaman.status');
        $query->join('users', 'users.id', '=', 'peminjaman.userId');
        $query->join('buku', 'buku.id', '=', 'peminjaman.bukuId');
        $query->where('status', '=', 'dipinjam');
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

        $datapinjam = $query->get();
        
        return view('dashboard.pinjam.laporan_cetak', compact('datapinjam'));
    }
}
