@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pengembalian</h1>
    </div>
    <div class="d-flex mb-3 justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2">
        <div class="col-md-3" style="margin-right: 550px; width: 250px;">
            <form action="{{ route('cetak.kembali') }}" method="get">
                @csrf
                @if ($filter['tahun'] != "")
                    <input type="text" name="tahun" value="{{$filter['tahun']}}" hidden>
                @endif
                @if ($filter['bulan'] != "")
                    <input type="text" name="bulan" value="{{$filter['bulan']}}" hidden>
                @endif
                <button type="submit" class="btn btn-danger"><i class="ion ion-printer mr-1"></i> Cetak Laporan Pinjam</button>
            </form>
        </div>

        <div class="col-md-6" >
            <form action="{{route('filter.kembali')}}" method="post">
                @csrf
                <div class="d-flex justify-content-start">
                    <div class="col-md-3 " style="margin-right: 10px;">
                        <select name="bulan" id="bulan" class="form-control"  required >
                        <option value="">- PILIH BULAN -</option>
                        <option value="1">Januari</option>
                        <option value="2">Februari</option>
                        <option value="3">Maret</option>
                        <option value="4">April</option>
                        <option value="5">Mei</option>
                        <option value="6">Juni</option>
                        <option value="7">Juli</option>
                        <option value="8">Agustus</option>
                        <option value="9">September</option>
                        <option value="10">Oktober</option>
                        <option value="11">November</option>
                        <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="tahun" id="tahun" class="form-control" required>
                            <option value="">- PILIH TAHUN -</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                        </select>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn btn-primary" style="background-color: blue;"><i class="ion ion-search mr-1"></i> Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Pengembalian</th>
                            <th>Kode Anggota</th>
                            <th>Nama</th>
                            <th>Judul Buku</th>
                            <th>Tgl Pinjam</th>
                            <th>Tgl Kembali</th>
                            <th>Keterlambatan</th>
                            {{-- <th>Aksi</th> --}}
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($datakembali as $data)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->kode_anggota }}</td>
                                <td>{{ $data->nama_anggota}}</td>
                                <td>{{ $data->judul_buku}}</td>
                                <td>{{ $data->tgl_pinjam }}</td>
                                <td>{{ $data->tgl_kembali }}</td>
                                <td>{{ $data->keterlambatan }} Hari</td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection