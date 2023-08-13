@extends('dashboard.layouts.main')

@section('container')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">

                <div class="card shadow mt-2">

                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-black">Transaksi Peminjaman</h6>
                    </div>
                    <div class="card-body">
                        <form action="/addpinjam" method="post">
                        @csrf
                            <div class="mb-4">
                                <label for="userId" class="form-label">Nama Anggota</label>
                                <select name="userId" class="form-control">
                                    <option value="">Silahkan Pilih Nama Anggota</option>
                                    @foreach ($user as $item)
                                        <option value="{{$item->id}}">{{$item->nama_anggota}}</option>
                                    @endforeach
                                </select>
                                @error('userId')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="bukuId" class="form-label">Judul Buku</label>
                                <select name="bukuId" class="form-control">
                                    <option value="">Silahkan Pilih Judul Buku</option>
                                    @foreach ($buku as $item)
                                        <option value="{{$item->id}}">{{$item->judul_buku}}</option>
                                    @endforeach
                                </select>
                                @error('bukuId')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="tgl_pinjam">Tgl Pinjam</label>
                                    <input class="form-control" 
                                    type="date" 
                                    name="tgl_pinjam" 
                                    value="{{ old('tgl_pinjam') }}">
                                    @error('tgl_pinjam')
                                        <small class="text-danger mt-2">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="mb-4">
                                <label for="tgl_kembali">Tgl kembali</label>
                                    <input class="form-control" 
                                    type="date" 
                                    name="tgl_kembali" 
                                    value="{{ old('tgl_kembali') }}">
                                    @error('tgl_kembali')
                                        <small class="text-danger mt-2">{{ $message }}</small>
                                    @enderror
                            </div>
                            
                            <div>
                                <button class="btn btn-primary" type="submit">Tambah</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection