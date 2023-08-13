@extends('dashboard.layouts.main')

@section('container')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">

                <div class="card shadow mt-2">

                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-black">Tambah Laporan</h6>
                    </div>
                    <div class="card-body">
                        <form action="/addlaporan" method="post">
                        @csrf
                            <div class="mb-4">
                                <label for="kode_buku" class="form-label">Kode buku</label>
                                <input type="text" class="form-control" id="kode_buku" name="kode_buku"
                                value="{{ old('kode_buku') }}" />
                                @error('kode_buku')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="judul_buku" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="judul_buku" name="judul_buku"
                                value="{{ old('judul_buku') }}" />
                                @error('judul_buku')
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
                                <label for="status">Status</label>
                                    <input class="form-control" 
                                    type="text" 
                                    name="status" 
                                    value="{{ old('status') }}">
                                    @error('status')
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