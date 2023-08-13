<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Register </title>
  <link rel="stylesheet" href="/css/register.css">
  <link rel="stylesheet" href="/css/sb-admin-2.min.css">
  </head>
<body>

<!-- partial:index.partial.html -->
<div id="bg"></div>
<img src="" alt="">
<form action="/register" method="post">
    @csrf
    <img src="./img/Banner1.png" width= "380" height= "300">
    <h3 class="card-title">E-Library</h3>

    <div class="form-field">
    <!-- <input type="email" placeholder="Name" required/> -->
    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                            id="name" placeholder="Nama" required value="{{ old('name') }}">
                            <label for="name"></label>
                            @error('name')
                            <div class="invalid-feedback">
                               {{ $message }}
                            </div>
                            @enderror
                        </div>
  </div>
  
  <div class="form-field">
    <!-- <input type="password" placeholder="NIS" required/>    -->
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                            id="email" placeholder="Email" required value="{{ old('email') }}">
                            <label for="email"></label>
                            @error('email')
                            <div class="invalid-feedback">
                               {{ $message }}
                            </div>
                            @enderror
                        </div>



<div class="form-field">
    <!-- <input type="password" placeholder="NIS" required/>    -->
    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                            id="password" placeholder="Password" required value="{{ old('password') }}">
                            <label for="password"></label>
                            @error('password')
                            <div class="invalid-feedback">
                               {{ $message }}
                            </div>
                            @enderror
                        </div>

<div class="form-field">
  <!-- <input type="password" placeholder="NIS" required/>    -->
  <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
    <option value="">---Pilih Jenis Kelamin---</option>
    <option value="Laki-Laki">Laki-Laki</option>
    <option value="Perempuan">Perempuan</option>
  </select>

      @error('jenis_kelamin')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
</div>

<div class="form-field">
  <select name="kelas" class="form-control">
    <option value="">---Pilih kelas---</option>
    <option value="Kelas 1">Kelas 1</option>
    <option value="Kelas 2">Kelas 2</option>
    <option value="Kelas 3">Kelas 3</option>
    <option value="Kelas 4">Kelas 4</option>
    <option value="Kelas 5">Kelas 5</option>
    <option value="Kelas 6">Kelas 6</option>
  </select>
      @error('kelas')
      <div class="invalid-feedback">
          {{ $message }}
      </div>
      @enderror
</div>
  
  <div class="form-field">
    <!-- <a href="/login" type="submit" target="_blank">Register</a> -->
    <input type="submit" value="Register" />
                    @error('auth')
                            <small class="text-danger mt-2">{{ $message }}</small>
                    @enderror
  </div>
</form>
<!-- partial -->
  
</body>
</html>