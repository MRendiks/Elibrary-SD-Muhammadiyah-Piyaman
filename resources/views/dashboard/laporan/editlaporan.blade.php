@extends('dashboard.layouts.main')

@section('container')

<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                        <div id="card-content">
                            <div id="card-title">
                                <h3>Laporan</h3>
                                <br>
                                <div class="underline-title"></div>
                            </div>
                            </div>
                            <br>
                             <!-- form validasi -->
                            <form action="{{url('data-laporan',$laporan->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-4">
                                <label for="kode_buku" class="form-label">Kode buku</label>
                                <input type="text" class="form-control" id="kode_buku" name="kode_buku"
                                value="{{ $laporan->kode_buku }}" />
                                @error('kode_buku')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="judul_buku" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="judul_buku" name="judul_buku"
                                value="{{ $laporan->judul_buku }}" />
                                @error('judul_buku')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="penerbit" class="form-label">Penerbit</label>
                                <input type="text" class="form-control" id="penerbit" name="penerbit"
                                value="{{ $laporan->penerbit }}" />
                                @error('penerbit')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                    <label for="status">Status</label>
                                    <input class="form-control" 
                                    type="text" 
                                    name="status" 
                                    value="{{ $laporan->status }}">
                                    @error('status')
                                        <small class="text-danger mt-2">{{ $message }}</small>
                                    @enderror
                            </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-info">Ubah</button>
                                </div>
                            </form>
 
                        </div>
                    </div>
            </div>
</div>

@endsection