@extends('dashboard.layouts.main')

@section('container')
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Transaksi Peminjaman</h1>
        @if(session('failed'))
            <div class="alert alert-danger">
                {{ session('failed') }}
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    </div>
    <div class="d-flex mb-3 justify-content-start flex-wrap flex-md-nowrap align-items-center pb-2">

        <a href="/addpinjam" class="col-md-2 d-none d-sm-inline-block btn btn-sm btn-info shadow-sm" style="margin-right: 30px;">
            <i class="fas fa-download fa-sm text-white-50"></i> Tambah Peminjaman</a>

        <div class="col-md-3" style="margin-right: 300px; width: 250px;">
            <form action="{{ route('cetak.pinjam') }}" method="get">
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
            <form action="{{route('filter.pinjam')}}" method="post">
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
                            <th>Id Peminjaman</th>
                            <th>Kode Anggota</th>
                            <th>Nama </th>
                            <th>Judul Buku</th>
                            <th>Tgl Pinjam</th>
                            <th>Tgl Kembali</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($datapinjam as $data)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->kode_anggota }}</td>
                                <td>{{ $data->nama_anggota }}</td>
                                <td>{{ $data->judul_buku }}</td>
                                <td>{{ $data->tgl_pinjam }}</td>
                                <td>{{ $data->tgl_kembali }}</td>
                                @if ($data->status == "dipinjam")
                                    <td>{{ $data->status }}</td>
                                @else
                                    <td>{{ $data->status }}</td>
                                @endif
                            <td>
                                <form action="/data-pinjam" method="post">
                                                <a class="btn btn-outline-warning" href="/data-pinjam/{{ $data->id }}/update">Update<i class="fa-solid fa-pen-to-square"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-outline-danger" formmethod="POST"
                                                onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')"
                                                name="id" value="{{ $data->id }}" class="btn btn-danger">Delete
                                                <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                </form>
                            </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection