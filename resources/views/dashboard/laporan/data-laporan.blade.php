@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Laporan Kerusakan dan Kedatangan</h1>
        <!-- <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
        </form> -->
        <!-- <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#formModal" href="/addobat">
        <i class="fas fa-download fa-sm text-white-50"></i> Tambah Data Obat
        </button> -->
    </div>
    <div class="d-flex mb-3 justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2">
    <a href="/printbuku" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
    class="fas fa-download fa-sm text-white-50"></i> print</a>
    <a href="/addlaporan" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Laporan Buku</a>
    </div>

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Laporan</th>
                            <th>Kode Buku</th>
                            <th>Judul Buku</th>
                            <th>Penerbit</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($datalaporan as $data)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->kode_buku }}</td>
                                <td>{{ $data->judul_buku}}</td>
                                <td>{{ $data->penerbit }}</td>
                                <td>{{ $data->status}}</td>
                            <td>
                                <form action="/data-laporan" method="post">
                                <a class="btn btn-outline-warning" href="/data-laporan/{{ $data->id }}/update">Update<i class="fa-solid fa-pen-to-square"></i></a>
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