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
                      <a class="nav-link"  href="">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item" style="margin-right: 50px;">
                        <a class="nav-link" href="#book">My Books</a>
                      </li>
  
                
                <li class="nav-item" style="margin-right: 50px;">
                  <a class="nav-link" href="/login">Login</a>
                </li>
               
                      
                  </ul>
                  </form>
                </div>
              </nav>
        </div>
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
    @foreach ($databuku as $item)
        
  <div class="col-12 col-md-3  ">
    <div class="card2 " style="width: 18rem;">
      <img src="{{ asset('gambar_buku/'.$item->gambar)}}" style="border-radius: 20px;" class="card-img-top" alt="gambar tidak ditemukan">
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
          <a class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#pinjam{{$item->id}}" role="button">RAK {{$item->rak}}</a>
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
