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
    <link href="landing/style.css"rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color:#313031";>
        <div class="container">
          <a class="navbar-brand">KELOMPOK 7 | HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/></svg>
              </a>
              </li>
              <li class="nav-item">
                <a class="nav-link " aria-current="page" href="/pegawai"><i class="fas fa-users"></i></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="/perusahaan"><i class="fas fa-address-card"></i></i></a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="/login"><i class="fas fa-sign-out-alt"></i>Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
       <!-- Akhir Navbar -->
    <!-- banner -->
    <div class="container-fluid banner">
        <div class="container text-center">
            <h4 class="display-6">Selamat Datang di Website Kami</h4>
            <h3 class="display-1">TEAM 7!</h3>
            <a href="#layanan"></a>
                <button type="button" class="btn btn-danger btn-lg">Cek Layanan</button>
        </div>
    </div>
    <!-- layanan -->
    <div class="container-fluid layanan pt-5 pb-5">
        <div class="container text-center">
            <h2 class="display-3" id="layanan">Layanan</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, corporis!</p>
            <div class="row pt-4">
                <div class="col-md-4">
                    <span class="lingkaran"><i class="fas fa-building fa-3x"></i></span>
                    <h3 class="mt-3">Perusahaan</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, nesciunt.</p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran"><i class="fas fa-chart-network fa-3x"></i></span>
                    <h3 class="mt-3">Komunitas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, nesciunt.</p>
                </div>

                <div class="col-md-4">
                    <span class="lingkaran"><i class="fas fa-money-check-edit fa-3x"></i></span>
                    <h3 class="mt-3">Service</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, nesciunt.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- portofolio -->
    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
            <h2 class="display-3 id=portofolio">Portofolio</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus, quidem! Et voluptatum magni sapiente qui non corporis assumenda, totam modi!</p>
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://i0.wp.com/www.maxmanroe.com/vid/wp-content/uploads/2017/12/Pengertian-Teknologi-Informasi-dan-Komunikasi.jpg?fit=700%2C368&ssl=1" 
                            class="card-img-top"
                        width="200"
                        height="200"
                        />
                        <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore deserunt tenetur excepturi? Explicabo, recusandae doloribus.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,q_auto:best,w_640/v1610266176/o686ecawf3fgccume44n.jpg" 
                            class="card-img-top"
                        width="200"
                        height="200"
                        />
                        <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore deserunt tenetur excepturi? Explicabo, recusandae doloribus.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="https://www.elsevier.com/__data/assets/image/0004/823261/information-system-supporting-science.jpg" 
                            class="card-img-top"
                        width="200"
                        height="200"
                        />
                        <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore deserunt tenetur excepturi? Explicabo, recusandae doloribus.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="https://awsimages.detik.net.id/community/media/visual/2019/02/22/33b9a7e3-1dd1-42c4-bc9f-50cf6a7391a4.jpeg?w=700&q=90" 
                            class="card-img-top"
                        width="200"
                        height="200"
                        />
                        <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore deserunt tenetur excepturi? Explicabo, recusandae doloribus.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="https://img.okezone.com/content/2021/08/13/54/2455075/diperkirakan-85-juta-lapangan-kerja-hilang-digantikan-teknologi-pada-2025-4Yly1DNWyu.jpg" 
                            class="card-img-top"
                        width="200"
                        height="200"
                        />
                        <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore deserunt tenetur excepturi? Explicabo, recusandae doloribus.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="https://img.beritasatu.com/cache/beritasatu/910x580-2/1592556565.jpg" 
                            class="card-img-top"
                        width="200"
                        height="200"
                        />
                        <div class="card-body">
                        <h5 class="card-title">Lorem, ipsum.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore deserunt tenetur excepturi? Explicabo, recusandae doloribus.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- tentang -->
    <div class="container-fluid pt-5 pb-5">
        <div class="container">
            <h2 class="display-3 text-center" id="tentang">Tentang</h2>
            <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Similique, odit!</p>
            <div class="clearfix pt-5"><img src="https://www.wisdomtech.co.in/assets/images/bg/about-us-03.jpg"
                class="col-md-6 float-md-end mb-3 crop-img" 
                width="300" 
                height="300"/>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque laboriosam cumque aliquid culpa optio molestiae!</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti possimus facilis soluta officia consectetur distinctio!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nisi natus facilis, culpa quam nemo!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et illum exercitationem vitae molestias architecto hic magni, voluptates non ad fugit!</p>
            </div>
        </div>
    </div>
    <!-- klien -->
    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
            <h2 class="display-3" id=klien>ANGGOTA | TEAM 7</h2>
           
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4 text-center klien">
                    <img src="../style/boy.png"
                    width="200"    class="rounded-circle mb-3"
                    />
                    <h4>Marita Santi</h4>
                    <p>NIM | 09020582024019</p>
                    <p>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>

                <div class="col-md-4 text-center klien">
                    <img src="../style/boy.png"
                    width="200"    class="rounded-circle mb-3"
                    />
                    <h4>Michael Dell</h4>
                    <p>Website yang renponsif!</p>
                    <p>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>

                <div class="col-md-4 text-center klien">
                    <img src="../style/boy.png"
                    width="200"    class="rounded-circle mb-3"
                    />
                    <h4>Paul</h4>
                    <p>Customer merasa puas!</p>
                    <p>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>

                <div class="col-md-4 text-center klien">
                    <img src="../style/boy.png"
                    width="200"    class="rounded-circle mb-3"
                    />
                    <h4>John Doe</h4>
                    <p>Pelayanan nya bagus!</p>
                    <p>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>

                <div class="col-md-4 text-center klien">
                    <img src="../style/boy.png"
                    width="200"  class="rounded-circle mb-3"
                    />
                    <h4>Michael Dell</h4>
                    <p>Website yang renponsif!</p>
                    <p>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>

                <div class="col-md-4 text-center klien">
                    <img src="../style/boy.png"
                    width="200"class="rounded-circle mb-3"
                    />
                    <h4>Paul</h4>
                    <p>Customer merasa puas!</p>
                    <p>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- kontak kami -->
    <div class="container-fluid pt-5 pb-5 kontak">
        <div class="container">
            <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste, temporibus.</p>
            <div class="row pb-3">
                <div class="col-md-6">
                    <input class="form-control form-control-lg mb-3"
                    type="text" placeholder="Nama"/>

                    <input class="form-control form-control-lg mb-3"
                    type="text" placeholder="Email"/>

                    <input class="form-control form-control-lg mb-3"
                    type="text" placeholder="No. Phone"/>
                </div>
                <div class="col-md-6">
                    <textarea class="form-control form-control-lg" rows="5"></textarea>
                </div>
            </div>
            <div class="col-md-3 mx-auto text-center">
                <button type="button" class="btn btn-danger btn-lg">Kirim Pesan</button>
            </div>
        </div>
    </div>
    <div class="container text-center pt-5 pb-5">
        All Rights Reserved &copy; 2021
    </div>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>