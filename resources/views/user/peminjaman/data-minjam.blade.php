@extends('user.layot.mainn')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Transaksi Peminjaman</h1>
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

    <a href="/addpinjam" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Tambah Peminjaman</a>
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
                            <th>Judul</th>
                            <th>Tgl Pinjam</th>
                            <th>Tgl Kembali</th>
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