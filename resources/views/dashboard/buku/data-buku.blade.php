@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Buku</h1>
    </div>
    <div class="d-flex mb-3 justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2">
    <a href="/addbuku" class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm">
        <i class="fas fa-download fa-sm text-white-50"></i> Tambah Buku</a>
    </div>

    <div class="card shadow mb-4">

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id Buku</th>
                            <th>Kode buku</th>
                            <th>Judul Buku</th>
                            <th>Jenis Buku</th>
                            <th>Tahun Terbit</th>
                            <th>Rak</th>
                            <th>Stok</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($databuku as $data)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->kode_buku }}</td>
                                <td>{{ $data->judul_buku }}</td>
                                <td>{{ $data->jenis_buku }}</td>
                                <td>{{ $data->tahun_terbit }}</td>
                                <td>{{ $data->rak }}</td>
                                
                                <td>{{ $data->stok }}</td>
                                <td><img src="gambar_buku/{{$data->gambar}}" alt="" width="100px"></td>
                                <td>
                                <form action="/data-buku" method="post">
                                <a class="btn btn-outline-warning" href="/data-buku/{{ $data->id }}/update">Update<i class="fa-solid fa-pen-to-square"></i></a>
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