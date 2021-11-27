<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
    crossorigin="anonymous"/>

    

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

    

<main class="form-signin" style="background-color: rgba(139, 135, 129, 0.062)">
  <form action="/login" method="POST">

    @csrf
    
    <h1 class="h3 mb-3 fw-normal" style="font-family: serif">Log In</h1>
    <div class="logo-login">
      <i class="fas fa-key"></i>
    </div>

    <div class="form-floating">
      <input type="email" name="email" class="form-control" @error('email')@enderror is-invalid id="email" placeholder="name@example.com">
      <label for="email">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password"  name ="password"class="form-control" id="password" placeholder="Password" required>
      <label for="password">Password</label>
      @error('email')

      <div class="invalid-feedback">
        {{ $message }}
      </div>
          
      @enderror
    </div>

   
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    
  </form>
  <small style="color: whitesmoke">Not registered ?<a href="/register">Register Now !</small>
</main>


    
  </body>
</html>
