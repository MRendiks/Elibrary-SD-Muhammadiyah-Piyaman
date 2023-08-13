@extends('user.layot.mainn')

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
                                <label for="kode_anggota" class="form-label">Kode Anggota</label>
                                <input type="text" class="form-control" id="kode_anggota" name="kode_anggota"
                                value="{{ old('kode_anggota') }}" />
                                @error('kode_anggota')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="nama_anggota" class="form-label"> Nama </label>
                                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota"
                                value="{{ old('nama_anggota') }}" />
                                @error('nama_anggota')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="judul_buku" class="form-label">Judul</label>
                                <input type="text" class="form-control" id="judul_buku" name="judul_buku"
                                value="{{ old('judul_buku') }}" />
                                @error('judul_buku')
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