<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href='https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="/css/layout.css">
    <script src="https://kit.fontawesome.com/f9355065a6.js" crossorigin="anonymous"></script>
    <title>E~Library</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body> 
    <div class="row">
        <div class="col-12 col-md-11">
            <nav class="navbar navbar-expand-lg navbar-light style="background-color: #D299CB;">
                <a class="navbar-brand" href="index.html">E-Library</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active" style="margin-right: 50px;">
                      <a class="nav-link"  href="/welcome">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" style="margin-right: 50px;">
                        <a class="nav-link" href="#book">My Books</a>
                    </li>
                    <li class="nav-item" style="margin-right: 50px;">
                      
                        <form action="{{route('search.book_name')}}" method="GET">
                          <div class="input-group">
                          <div class="form-outline">
                            <input type="search" id="form1" name="search" class="form-control" placeholder="Search...."/>
                          </div>
                          {{-- <input type="submit" value="search"> --}}
                          <button type="submit" value="Submit" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                        </form>
                      
                  </li>
                  {{-- <form class="d-flex ms-auto my-4 my-lg-0 m-0" role="search">
                    <div class="input-group mb-0 scr">
                      <input type="search" class="form-control" placeholder="Cari Buku" aria-label="Search" aria-describedby="button=addon2" style="width:20ww;">
                      <button class="btn btn-brown btn-outline-primary m-0" type="submit" id="button-addon2">
                        <i class="fa fa-search text-white" aria-hidden="true"></i>
                      </button>
                  </div> 
                      </form> --}}
                @if (auth()->user()->level == 'anggota' || auth()->user()->level == 'petugas')
                
                <li class="nav-item nav-profile dropdown">
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path 
                        fill-rule="evenodd" 
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                      </svg>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                      <li>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#profileModal">
                            <i class="ti-power-off text-primary"></i>Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#peminjaman">
                            <i class="ti-power-off text-primary"></i>List Peminjaman
                        </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="/logout">
                      <i class="ti-power-off text-primary"></i>
                      Logout
                    </a>
                    </li>
                    </ul>
                  </div>
                </li>
                @else
                <li class="nav-item" style="margin-right: 50px;">
                  <a class="nav-link" href="/login">Login</a>
                </li>
                @endif
                      
                  </ul>
                  </form>
                </div>
              </nav>
        </div>
    </div>

    <div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="profileModalLabel">Detail Profile</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          <form>
              <div class="form-group">
                  <label for="username_admin">Username</label>
                  <input type="text" name="username_admin" id="username_admin" class="form-control" readonly value="{{auth()->user()->nama_anggota}}">
              </div>
              <div class="form-group">
                  <label for="email_admin">Email</label>
                  <input type="email" name="email_admin" id="email_admin" class="form-control" readonly value="{{auth()->user()->email}}">
              </div>
          </form>
      </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>

<div class="modal fade" id="peminjaman" tabindex="-1" role="dialog" aria-labelledby="peminjamanLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="peminjamanLabel">Detail Profile</h5>
          <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
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
                            <th>Cetak</th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach ($pinjam as $data)
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
                                  <form action="/{{$data->id}}/cetak" method="post">
                                    @csrf
                                    <input type="submit" class="btn btn-primary" value="Cetak">
                                  </form>
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
      </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
</div>
</div>
</div>

    <section class="landingPage" id="landingPage">
      <div class="image">
          <img src="{{asset('img/Banner1.png')}}" style="margin-top: -10; margin-right: 50px;" alt="">
      </div>
      <br>
      <br>
      <div class="content" style="margin-top: -40px;" >
        <h3>Selamat Datang Di <span> <br> E-Library SD Muhammadiyah Piyaman</span></h3>
        <h4>Tempatnya Membaca untuk Para Siswa</h4>
    </div>
    </section>

<!-- semua buku -->
<div id="book" class="container mt-5 mb-5 ">
  <div class="row">
    <div class="col-12 col-md-12 ">
      <h1 style="text-align: center;"> All Books</h1>
    </div>
  </div>
</div>

<div class="container  mt-5 margin-right margin-top" >
  <div class="row">
    @foreach ($databuku as $item)
        
  <div class="col-12 col-md-3  ">
    <div class="card2 " style="width: 18rem;">
      <img src="{{asset('gambar_buku/'.$item->gambar)}}" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body ">
        <h5 style="text-align: center;">{{$item->judul_buku}}</h5>
       <div class="star text-center">
        <i  class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i style="color: black;" class="far fa-star"></i>
       </div>        
        <p class="date text-center">Tahun Terbit : {{$item->tahun_terbit}}</p>
        @if($item->stok > 0)
        <a class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#pinjam{{$item->id}}" role="button">RAK {{$item->rak}}</a>
        @else
        <a class="btn"role="button">RAK {{$item->rak}}</a>
        @endif
          
      </div>
    </div>
  </div>

  <div class="modal fade" id="pinjam{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="pinjamLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="pinjamLabel">Detail Peminjaman Buku</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/user_minjam" method="POST">
              @csrf
                <div class="form-group">
                    <label for="username_admin">Username</label>
                    <input type="text" name="username_admin" id="username_admin" class="form-control" readonly value="{{auth()->user()->nama_anggota}}">
                    <input type="number" name="userId" value="{{auth()->user()->id}}" hidden>
                    <input type="number" name="bukuId" value="{{$item->id}}" hidden>
                </div>
                <div class="form-group">
                  <label for="judul_buku">Judul Buku</label>
                  <input type="text" name="judul_buku" id="judul_buku" class="form-control" readonly value="{{$item->judul_buku}}">
              </div>
                <div class="form-group">
                  <label for="judul_buku">Deskripsi Buku</label>
                  <textarea class="form-control" readonly cols="30" rows="10">{{$item->deskripsi}}</textarea>
                  {{-- <input type="text" name="judul_buku" id="judul_buku" class="form-control" readonly value="{{$item->deskripsi}}"> --}}
              </div>
                <div class="form-group">
                  <label for="gambar">Buku</label>
                  <img id="judul_buku" src="gambar_buku/{{$item->gambar}}" alt="" width="150px">
              </div>
                <div class="form-group">
                    <label for="tgl_kembali">Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" id="tgl_kembali" min="{{$minDate}}" class="form-control"  value="{{auth()->user()->email}}">
                </div>
                <center><button class="btn btn-primary col-lg-6" type="submit">Pinjam</button></center>
            </form>
        </div>
            
        </div>
    </div>
  </div>
  @endforeach
  </div>
</div>



<div class="container margin-top justify-content-center" >
  <div class="row">
    <div class="col-12 col-md-12 margin-top" >
      <nav aria-label="Page navigation example">
        <ul class="pagination" style="justify-content: center; margin-top: auto;">
          <li class="page-item text-center" style="justify-content: center;">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</div>

</body>
</html>
