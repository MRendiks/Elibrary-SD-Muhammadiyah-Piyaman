<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email'=> 'required',
            'password' => 'required|min:5|max:255',
            'jenis_kelamin' => 'required',
            'kelas' => 'required'
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $kode_anggota = 'US'. random_int(1, 10000);
        $level = 'anggota';
        
        $user = new User;
        $user->kode_anggota = $kode_anggota;
        $user->nama_anggota = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = $validatedData['password'];
        $user->jenis_kelamin = $validatedData['jenis_kelamin'];
        $user->kelas = $validatedData['kelas'];
        $user->level = $level;
        $user->save();

        // $request->session()->flash('success', 'Registration successfull! Please login');

        return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}