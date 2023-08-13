@extends('dashboard.layouts.main')

@section('container')

<div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card mt-5">
                        <div class="card-body">
                        <div id="card-content">
                            <div id="card-title">
                                <h3>Data Anggota</h3>
                                <br>
                                <div class="underline-title"></div>
                            </div>
                            </div>
                            <br>
                             <!-- form validasi -->
                            <form action="{{url('data-anggota',$anggota->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            
                            <div class="mb-4">
                                <label for="kode_anggota" class="form-label">Kode Anggota</label>
                                <input type="text" class="form-control" id="kode_anggota" name="kode_anggota"
                                value="{{ $anggota->kode_anggota }}" />
                                @error('kode_anggota')
                                    <small class="text-danger mt-2">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label for="nama_anggota" class="form-label">Nama Anggota</label>
                                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota"
                                value="{{ $anggota->nama_anggota }}" />
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
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-info">Update</button>
                                </div>
                            </form>
 
                        </div>
                    </div>
            </div>
</div>

@endsection