@extends('user.layot.mainn')

@section('container')

<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                        <div id="card-content">
                            <div id="card-title">
                                <h3>Transaksi Peminjaman</h3>
                                <br>
                                <div class="underline-title"></div>
                            </div>
                            </div>
                            <br>
                             <!-- form validasi -->
                            <form action="{{url('data-pinjam',$pinjam->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-4">
                                <label for="kode_anggota" class="form-label">Kode Anggota</label>
                                <input type="text" class="form-control" id="kode_anggota" name="kode_anggota"
                                value="{{ $pinjam->kode_anggota }}" />
                                @error('kode_anggota')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="nama_anggota" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota"
                                value="{{ $pinjam->nama_anggota }}" />
                                @error('nama_anggota')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="judul_buku" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="judul_buku" name="judul_buku"
                                value="{{ $pinjam->judul_buku }}" />
                                @error('judul_buku')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                    <label for="tgl_pinjam">Tgl Pinjam</label>
                                    <input class="form-control" 
                                    type="text" 
                                    name="tgl_pinjam" 
                                    value="{{ $pinjam->tgl_pinjam }}">
                                    @error('tgl_pinjam')
                                        <small class="text-danger mt-2">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="mb-4">
                                    <label for="tgl_kembali">Tgl kembali</label>
                                    <input class="form-control" 
                                    type="text" 
                                    name="tgl_kembali" 
                                    value="{{ $pinjam->tgl_kembali }}">
                                    @error('tgl_kembali')
                                        <small class="text-danger mt-2">{{ $message }}</small>
                                    @enderror
                            </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-info">Update</button>
                                </div>
                            </form>
 
                        </div>
                    </div>
            </div>
</div>

@endsection