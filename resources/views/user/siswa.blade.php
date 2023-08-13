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
</head>
<body> 
    <div class="row">
        <div class="col-12 col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light style="background-color: #D299CB;">
                <a class="navbar-brand" href="index.html">E-Library</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active" style="margin-right: 50px;">
                      <a class="nav-link"  href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                  
        <li class="nav-item" style="margin-right: 50px;">
                        <a class="nav-link" href="#book">My Books</a>
                      </li>
                      <li class="nav-item" style="margin-right: 50px;">
                        <a class="nav-link" href="minjam">Peminjaman</a>
                      </li>
                      <li class="nav-item" style="margin-right: 50px;">
                        <a class="nav-link" href="back">Pengembalian</a>
                      </li>
          

                      <form class="d-flex ms-auto my-4 my-lg-0 m-0" role="search">
            <div class="input-group mb-0 scr">
              <input type="search" class="form-control" placeholder="Cari Buku" aria-label="Search" aria-describedby="button=addon2" style="width:20ww;">
              <button class="btn btn-brown btn-outline-primary m-0" type="submit" id="button-addon2">
                <i class="fa fa-search text-white" aria-hidden="true"></i>
              </button>
          </div>
          </form>
                      <li class="nav-item" style="margin-right: 50px;">
                        <a class="nav-link" href="/login">Login</a>
                      </li>
                  </ul>
                  </form>
                </div>
              </nav>
        </div>
    </div>

    <section class="landingPage" id="landingPage">
      <div class="image">
          <img src="./img/Banner1.png" style="margin-top: -10; margin-right: 50px;" alt="">
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
  <div class="col-12 col-md-3  ">
    <div class="card2 " style="width: 18rem;">
      <img src="./img/bk.jpg" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body ">
        <h5 style="text-align: center;">Dongeng Aneka Hewan Laut</h5>
       <div class="star text-center">
        <i  class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i style="color: black;" class="far fa-star"></i>
       </div>        
        <p class="date text-center">Tahun Terbit : 2006</p>
          <a class="btn btn-primary" href="minjam" role="button">RAK 7</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-3">
    <div class="card2 " style="width: 18rem;">
      <img src="./img/buku2.jpg" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body">
        <h5 style="text-align: center;">Ilmu Pengetahuan Alam Kelas 5</h5>
        <div class="star text-center">
          <i  class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i style="color: black;" class="far fa-star"></i>

         </div> 
        <p class="date text-center">Tahun Terbit : 2009</p>
          <a class="btn btn-primary" href="" role="button">RAK 2</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-3">
    <div class="card2 " style="width: 18rem;">
      <img src="./img//buku3.jpg" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body">
        <h5 style="text-align: center;">Ayo Sholat</h5>
        <div class="star text-center">
          <i  class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i style="color: black;" class="far fa-star"></i>
          <i style="color: black;" class="far fa-star"></i>

         </div> 
        <p class="date text-center">Tahun Terbit : 2015</p>
          <a class="btn btn-primary" href="detail.html" role="button">RAK 5</a>
      </div>
    </div>
  </div>
 
  <div class="col-12 col-md-3">
    <div class="card2 " style="width: 18rem;">
      <img src="./img/buku4.jpg"  style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body " >
        <h5 style="text-align: center;">Dongeng Tentang Ayam</h5>
        <div class="star text-center">
          <i  class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i style="color: black;" class="far fa-star"></i>

         </div> 
        <p class="date text-center">Tahun Terbit : 2011</p>
          <a class="btn btn-primary" href="" role="button">RAK 8</a>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<div class="container mt-5 margin-right margin-top">
  <div class="row">
  <div class="col-12 col-md-3">
    <div class="card2 " style="width: 18rem;">
      <img src="./img/buku5.jpg" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body">
        <h5 style="text-align: center;">Si Kancil Yang Cerdik</h5>
        <div class="star text-center">
          <i  class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i style="color: black;" class="far fa-star"></i>

         </div> 
        <p class="date text-center">Tahun Terbit : 2014</p>
          <a class="btn btn-primary" href="" role="button">RAK 10</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-3">
    <div class="card2 " style="width: 18rem;">
      <img src="./img/buku6.jpg" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body">
        <h5 style="text-align: center;">Dongeng Asal Usul Binatang</h5>
        <div class="star text-center">
          <i  class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i style="color: black;" class="far fa-star"></i>

         </div> 
        <p class="date text-center">Tahun Terbit : 2016</p>
          <a class="btn btn-primary" href="" role="button">RAK 12</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-3">
    <div class="card2" style="width: 18rem;">
      <img src="./img/buku7.jpg" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body">
        <h5 style="text-align: center;">Matematika untuk SD/MI Kelas 3</h5>
        <div class="star text-center">
          <i  class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i style="color: black;" class="far fa-star"></i>

         </div> 
        <p class="date text-center">Tahun Terbit : 2007</p>
        <button type="button" class="btn btn-primary">RAK 3</button>
      </div>
    </div>
  </div>
 
  <div class="col-12 col-md-3">
    <div class="card2" style="width: 18rem;">
      <img src="./img/buku8.jpg" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body">
        <h5 style="text-align: center;">Doa Doa Harian Anak Muslim</h5>
        <div class="star text-center">
          <i  class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i style="color: black;" class="far fa-star"></i>
          <i style="color: black;" class="far fa-star"></i>

         </div> 
        <p class="date text-center">Tahun Terbit : 2018</p>
          <a class="btn btn-primary" href="" role="button">RAK 1</a>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-3">
    <div class="card2" style="width: 18rem;">
      <img src="./img/buku9.jpg" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body">
        <h5 style="text-align: center;">Menolong Yuk!</h5>
        <div class="star text-center">
          <i  class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i style="color: black;" class="far fa-star"></i>

         </div> 
        <p class="date text-center">Tahun Terbit : 2007</p>
        <button type="button" class="btn btn-primary">RAK 3</button>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-3">
    <div class="card2" style="width: 18rem;">
      <img src="./img/buku10.jpg" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body">
        <h5 style="text-align: center;">Kisah Teladan 25 Nabi dan Rasul</h5>
        <div class="star text-center">
          <i  class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i style="color: black;" class="far fa-star"></i>

         </div> 
        <p class="date text-center">Tahun Terbit : 2007</p>
        <button type="button" class="btn btn-primary">RAK 3</button>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-3">
    <div class="card2" style="width: 18rem;">
      <img src="./img/buku11.jpg" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body">
        <h5 style="text-align: center;">Cerita Rakyat Nusantara</h5>
        <div class="star text-center">
          <i  class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i style="color: black;" class="far fa-star"></i>

         </div> 
        <p class="date text-center">Tahun Terbit : 2007</p>
        <button type="button" class="btn btn-primary">RAK 3</button>
      </div>
    </div>
  </div>
  <div class="col-12 col-md-3">
    <div class="card2" style="width: 18rem;">
      <img src="./img/buku12.jpg" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
      <div class="card-body">
        <h5 style="text-align: center;">Pendidikan Agama Islam dan Budi Pekerti Kelas 1</h5>
        <div class="star text-center">
          <i  class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i style="color: black;" class="far fa-star"></i>

         </div> 
        <p class="date text-center">Tahun Terbit : 2013</p>
        <button type="button" class="btn btn-primary">RAK 16</button>
      </div>
    </div>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
