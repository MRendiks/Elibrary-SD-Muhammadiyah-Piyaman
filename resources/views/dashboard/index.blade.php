@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-wrap
align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
</div>
<div class="row">
<div class="card text-bg-primary mb-3 ms-5" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">PEMINJAMAN</h5>
    <p class="card-text"> {{$peminjaman}} PEMINJAMAN</p>
  </div>
</div>
<div class="card text-bg-success mb-3 ms-5" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">ANGGOTA</h5>
    <p class="card-text">{{$anggota}} SISWA</p>
  </div>
</div>
<div class="card text-bg-danger mb-3 ms-5" style="max-width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">BUKU</h5>
    <p class="card-text">{{$buku}} BUKU</p>
  </div>
</div>
</div>
@endsection