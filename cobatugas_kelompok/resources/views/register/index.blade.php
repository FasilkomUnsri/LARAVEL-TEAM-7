<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Registrasi</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous"/>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/style/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
  <main class="form-registration" style="background-color: rgba(139, 135, 129, 0.062)">
  <form action="/register" method="POST">
    @csrf
    
    <h1 class="h3 mb-3 fw-normal" style="font-family: serif">Registration</h1>
    <div class="logo-login">
      <i class="fas fa-user-plus"></i>
    </div>

    <div class="form-floating">
      <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
      <label for="name">Name</label>
      @error('name')

      <div class="invalid-feedback">
       {{ $message }}
      </div>
          
      @enderror
    </div>

    <div class="form-floating">
        <input type="email" name="email" class="form-control @error('email')is-invalid @enderror" id="email" placeholder="Email" required value="{{ old('email') }}">
        <label for="email">Email</label>
        @error('email')

        <div class="invalid-feedback">
         {{ $message }}
        </div>
            
        @enderror
    </div>

    <div class="form-floating">
        <input type="password" name="password" class="form-control @error('password')is-invalid @enderror" id="floatingPassword" placeholder="Password" required >
        <label for="floatingPassword">Password</label>
        @error('password')

        <div class="invalid-feedback">
         {{ $message }}
        </div>
            
        @enderror
    </div>
  
  
    
    <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
    
  </form>
  <small><a href="/login">Login</small>
</main>


    
  </body>
</html>
