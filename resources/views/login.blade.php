<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login </title>
  <link rel="stylesheet" href="/css/login.css">
  </head>
<body>

<!-- partial:index.partial.html -->
<div id="bg"></div>
<img src="" alt="">
<form action="/login" method="post">
  @csrf
    <img src="./img/Banner1.png" width= "380" height= "300">
    <h3 class="card-title">E-Library</h3>
    <div class="form-field">
    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                        id="email" placeholder="Email" autofocus required value="{{ old('email') }}">
                        <label for="email"></label>
                        @error('email')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
  </div>
  
  <div class="form-field">
  <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        <label for="password" required></label>
  </div>
  
  <div class="form-field">
  <input type="submit" value="Login" />
                    @error('auth')
                            <small class="text-danger mt-2">{{ $message }}</small>
                    @enderror   
  </div>
  <div class="text-center">
    <p>Belum Punya Akun? <a href="/register">Register</a></p>
</div>
</form>
<!-- partial -->
  
</body>
</html>