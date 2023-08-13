<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use Illuminate\Http\Request;

class DashboardLaporanController extends Controller
{
    public function index()
    {
        $laporan = Laporan::get();
        return view('dashboard.laporan.data-laporan', ['datalaporan' => $laporan]);
    }

    public function add()
    {
        return view('dashboard.laporan.addlaporan');
    }
    public function store(Request $request)
    {
        // dd($request);
        $laporan = new Laporan;

        $laporan->kode_buku = $request->kode_buku;
        $laporan->judul_buku = $request->judul_buku;
        $laporan->penerbit = $request->penerbit;
        $laporan->status = $request->status;




        $laporan->save();
        return redirect()->route('datalaporan');
    }

    public function delete(Request $request)
    {
        $id = $request->id;

        $laporan = new Laporan();
        $laporan->where('id', $id)->delete();

        return redirect()->route('datalaporan');
    }


    public function edit(Request $request, $id)
    {
        // return view('admin.supplier.editsupplier');
        $laporan= Laporan::find($id);
        return view('dashboard.laporan.editlaporan', compact('laporan'));
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        $laporan = Laporan::find($id);
        $laporan->kode_buku = $request->input('kode_buku');
        $laporan->judul_buku = $request->input('judul_buku');
        $laporan->penerbit = $request->input('penerbit');
        $laporan->status = $request->input('status');

        $laporan->update();

        

        return redirect('data-laporan');
    }
    public function cetak_pdf()
    {
    	$laporan = Laporan::all();
 
    	$pdf = PDF::loadview('laporan_pdf',['laporan'=>$laporan]);
    	return $pdf->download('laporan-laporan-pdf');
    }
}
