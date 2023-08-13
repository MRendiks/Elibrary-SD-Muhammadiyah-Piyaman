@extends('dashboard.layouts.main')

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
                                    <label for="tgl_pinjam">Tgl Pinjam</label>
                                    <input class="form-control" 
                                    type="date" 
                                    name="tgl_pinjam" 
                                    value="{{ $pinjam->tgl_pinjam }}">
                                    @error('tgl_pinjam')
                                        <small class="text-danger mt-2">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="mb-4">
                                    <label for="tgl_kembali">Tgl kembali</label>
                                    <input class="form-control" 
                                    type="date" 
                                    name="tgl_kembali" 
                                    value="{{ $pinjam->tgl_kembali }}">
                                    @error('tgl_kembali')
                                        <small class="text-danger mt-2">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="mb-4">
                                <label for="status">Status</label>
                                <select name="status" class="form-control">
                                    <option value="dipinjam">dipinjam</option>
                                    <option value="dikembalikan">dikembalikan</option>
                                </select>
                                @error('status')
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