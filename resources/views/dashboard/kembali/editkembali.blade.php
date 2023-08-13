@extends('dashboard.layouts.main')

@section('container')

<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                        <div id="card-content">
                            <div id="card-title">
                                <h3>Transaksi Pengembalian</h3>
                                <br>
                                <div class="underline-title"></div>
                            </div>
                            </div>
                            <br>
                             <!-- form validasi -->
                            <form action="{{url('data-kembali',$kembali->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-4">
                                <label for="kode_buku" class="form-label">Kode buku</label>
                                <input type="text" class="form-control" id="kode_buku" name="kode_buku"
                                value="{{ $kembali->kode_buku }}" />
                                @error('kode_buku')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="nama_anggota" class="form-label">Nama anggota</label>
                                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota"
                                value="{{ $kembali->nama_anggota }}" />
                                @error('nama_anggota')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="judul_buku" class="form-label">Jenis Obat</label>
                                <input type="text" class="form-control" id="judul_buku" name="judul_buku"
                                value="{{ $kembali->judul_buku }}" />
                                @error('judul_buku')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                    <label for="tgl_pinjam">Tgl Pinjam</label>
                                    <input class="form-control" 
                                    type="text" 
                                    name="tgl_pinjam" 
                                    value="{{ $kembali->tgl_pinjam }}">
                                    @error('tgl_pinjam')
                                        <small class="text-danger mt-2">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="mb-4">
                                    <label for="tgl_kembali">Tgl kembali</label>
                                    <input class="form-control" 
                                    type="text" 
                                    name="tgl_kembali" 
                                    value="{{ $kembali->tgl_kembali }}">
                                    @error('tgl_kembali')
                                        <small class="text-danger mt-2">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="mb-4">
                                    <label for="keterlambatan">Kterlambatan</label>
                                    <input class="form-control" 
                                    type="text" 
                                    name="keterlambatan" 
                                    value="{{ $kembali->keterlambatan }}">
                                    @error('keterlambatan')
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