@extends('dashboard.layouts.main')

@section('container')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">

                <div class="card shadow mt-2">

                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-black">Data Anggota</h6>
                    </div>
                    <div class="card-body">
                        <form action="/addanggota" method="post">
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
                                <label for="nama_anggota" class="form-label">Nama Anggota</label>
                                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota"
                                value="{{ old('nama_anggota') }}" />
                                @error('nama_anggota')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">Silahkan Pilih Jenis Kelamin</option>
                
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    
                                </select>
                                @error('jenis_kelamin')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="kelas">Kelas</label>
                                <select name="kelas" class="form-control">
                                    <option value="">Silahkan Pilih Kelas</option>
                                    <option value="Kelas 1">Kelas 1</option>
                                    <option value="kelas 2">kelas 2</option>
                                    <option value="kelas 3">kelas 3</option>
                                    <option value="kelas 4">kelas 4</option>
                                    <option value="kelas 5">kelas 5</option>
                                    <option value="kelas 6">kelas 6</option>
                                </select>
                                    @error('kelas')
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