<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Profile</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link 
        rel="stylesheet" 
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" 
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#">Kelompok7</a>
          <button
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarText" 
            aria-controls="navbarText" 
            aria-expanded="false" 
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse text-right" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="#layanan">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portofolio">Portofolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tentang">Tentang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#klien">Klien</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#kontak">Kontak Kami</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container-fluid banner">
        <div class="container text-center">
            <h4 class="display-6">Selamat Datang di Website Kami</h4>
            <h3 class="display-1">TEAM 7!</h3>
            <a href="#layanan"></a>
                <button type="button" class="btn btn-danger btn-lg">Cek Layanan</button>
        </div>
    </div>

    <div class="container-fluid layanan pt-5 pb-5">
        <div class="container text-center">
            <h2 class="display-3" id="layanan">Layanan</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, corporis!</p>
            <div class="row pt-4">
                <div class="col-md-4">
                    <span class="lingkaran"><i class="fas fa-building fa-5x"></i></span>
                    <h3 class="mt-3">Perusahaan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, nesciunt.</p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran"><i class="fas fa-chart-network fa-5x"></i></span>
                    <h3 class="mt-3">Komunitas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, nesciunt.</p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran"><i class="fas fa-money-check-edit fa-5x"></i></span>
                    <h3 class="mt-3">Service</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, nesciunt.</p>
                </div>
            </div>
        </div>
    </div>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>