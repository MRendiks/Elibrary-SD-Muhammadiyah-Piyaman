@extends('dashboard.layouts.main')

@section('container')

<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                        <div id="card-content">
                            <div id="card-title">
                                <h3>Data Buku</h3>
                                <br>
                                <div class="underline-title"></div>
                            </div>
                            </div>
                            <br>
                             <!-- form validasi -->
                            <form action="{{url('data-buku',$buku->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-4">
                                <label for="kode_buku" class="form-label">Kode buku</label>
                                <input type="text" class="form-control" id="kode_buku" name="kode_buku"
                                value="{{ $buku->kode_buku }}" />
                                @error('kode_buku')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="judul_buku" class="form-label">Judul buku</label>
                                <input type="text" class="form-control" id="judul_buku" name="judul_buku"
                                value="{{ $buku->judul_buku }}" />
                                @error('judul_buku')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="jenis_buku" class="form-label">Jenis Buku</label>
                                <input type="text" class="form-control" id="jenis_buku" name="jenis_buku"
                                value="{{ $buku->jenis_buku }}" />
                                @error('jenis_buku')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                    <label for="tahun_terbit">Tahun Terbit</label>
                                    <input class="form-control" 
                                    type="text" 
                                    name="tahun_terbit" 
                                    value="{{ $buku->tahun_terbit }}">
                                    @error('tahun_terbit')
                                        <small class="text-danger mt-2">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="mb-4">
                                <label for="rak">Rak</label>
                                <input class="form-control" 
                                type="text" 
                                name="rak" 
                                value="{{ $buku->rak }}">
                                @error('rak')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                        </div>
                            <div class="mb-4">
                                    <label for="stok">Stok</label>
                                    <input class="form-control" 
                                    type="text" 
                                    name="stok" 
                                    value="{{ $buku->stok }}">
                                    @error('stok')
                                        <small class="text-danger mt-2">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar Buku</label>
                                <img src="{{asset('gambar_buku/'.$buku->gambar)}}" alt="" width="100px" class="ml-2 mb-2">
                                <div class="col-sm-9">
                                  <input type="file" class="form-control" name="gambar" id="gambar" accept="image/png, image/gif, image/jpeg" value="{{old('gambar')}}">
                                </div>
                              </div>
                            </div>
                                <div class="mb-3" style="margin-left: 15px;">
                                    <button type="submit" class="btn btn-info">Update</button>
                                </div>
                                
                            </form>
 
                        </div>
                    </div>
            </div>
</div>

@endsection