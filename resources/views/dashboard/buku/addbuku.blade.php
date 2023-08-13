@extends('dashboard.layouts.main')

@section('container')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">

                <div class="card shadow mt-2">

                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-black">Data Buku</h6>
                    </div>
                    <div class="card-body">
                        <form action="/addbuku" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-4">
                                <label for="kode_buku" class="form-label">Kode Buku</label>
                                <input type="text" class="form-control" id="kode_buku" name="kode_buku"
                                value="{{ old('kode_buku') }}" />
                                @error('kode_buku')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="judul_buku" class="form-label">Judul buku</label>
                                <input type="text" class="form-control" id="judul_buku" name="judul_buku"
                                value="{{ old('judul_buku') }}" />
                                @error('judul_buku')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="jenis_buku" class="form-label">Jenis buku</label>
                                <input type="text" class="form-control" id="jenis_buku" name="jenis_buku"
                                value="{{ old('jenis_buku') }}" />
                                @error('jenis_buku')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="penerbit">Penerbit</label>
                                    <input class="form-control" 
                                    type="text" 
                                    name="penerbit" 
                                    value="{{ old('penerbit') }}">
                                    @error('penerbit')
                                        <small class="text-danger mt-2">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="mb-4">
                                <label for="tahun_terbit">Tahun Terbit</label>
                                    <input class="form-control" 
                                    type="text" 
                                    name="tahun_terbit" 
                                    value="{{ old('tahun_terbit') }}">
                                    @error('tahun_terbit')
                                        <small class="text-danger mt-2">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="mb-4">
                                <label for="rak">Rak</label>
                                    <input class="form-control" 
                                    type="number" 
                                    name="rak" 
                                    value="{{ old('rak') }}">
                                    @error('rak')
                                        <small class="text-danger mt-2">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="mb-4">
                                <label for="stok">Stok</label>
                                    <input class="form-control" 
                                    type="number" 
                                    name="stok" 
                                    value="{{ old('stok') }}">
                                    @error('stok')
                                        <small class="text-danger mt-2">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar Buku</label>
                                <div class="col-sm-9">
                                  <input type="file" class="form-control" name="gambar" id="gambar" accept="image/png, image/gif, image/jpeg" value="{{old('gambar')}}">
                                </div>
                              </div>
                            <br><br>
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