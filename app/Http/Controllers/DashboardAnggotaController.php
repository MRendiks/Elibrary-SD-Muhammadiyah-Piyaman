<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardAnggotaController extends Controller
{
    public function index()
    {
        $anggota = User::select('*')
        ->where('level', '=' ,'anggota')
        ->get();
        return view('dashboard.anggota.data-anggota', ['dataanggota' => $anggota]);
    }

    public function add()
    {
        return view('dashboard.anggota.addanggota');
    }
    public function store(Request $request)
    {
        // dd($request);
        $anggota = new User;

        $nama = $request->nama_anggota;
        $nama_final = str_replace(' ', '', $nama);

        $anggota->kode_anggota = $request->kode_anggota;
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->email = $nama_final . '@gmail.com';
        $anggota->password = $nama_final;
        $anggota->jenis_kelamin = $request->jenis_kelamin;
        $anggota->kelas = $request->kelas;
        $anggota->level = "anggota";
        $anggota->save();
        return redirect()->route('dataanggota');
    }

    public function delete(Request $request)
    {
        $id = $request->id;

        $anggota = new User();
        $anggota->where('id', $id)->delete();

        return redirect()->route('dataanggota');
    }


    public function edit(Request $request, $id)
    {
        // return view('admin.supplier.editsupplier');
        $anggota = User::find($id);
        return view('dashboard.anggota.editanggota', compact('anggota'));
    }
    public function update(Request $request, $id)
    {
        // dd($request);
        $anggota = User::find($id);

        $nama = $request->input('nama_anggota');
        $nama_final = str_replace(' ', '', $nama);

        $anggota->kode_anggota = $request->input('kode_anggota');
        $anggota->nama_anggota = $request->input('nama_anggota');
        $anggota->email = $nama_final . '@gmail.com';
        $anggota->password = $nama_final;
        $anggota->jenis_kelamin = $request->input('jenis_kelamin');
        $anggota->kelas = $request->input('kelas');
        $anggota->update();

        return redirect('data-anggota');
    }
}
