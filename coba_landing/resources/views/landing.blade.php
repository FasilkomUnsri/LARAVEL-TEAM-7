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
    <!-- navigasi -->
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
            <h2 class="display-3" id=klien>Klien</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam voluptates error distinctio quas voluptatem dolor sint alias numquam dolorum nihil.</p>
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4 text-center klien">
                    <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png"
                        class="rounded-circle mb-3"
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
                    <img src="http://gokubi.com/wp-content/uploads/2013/10/Steve-Andersen-Headshot-square1.jpeg"
                        class="rounded-circle mb-3"
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
                    <img src="https://www.kingrosales.com/wp-content/uploads/2018/05/king-rosales-profile-photo-square.jpg"
                        class="rounded-circle mb-3"
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
                    <img src="https://s3.amazonaws.com/cms-assets.tutsplus.com/uploads/users/810/profiles/19338/profileImage/profile-square-extra-small.png"
                        class="rounded-circle mb-3"
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
                    <img src="http://gokubi.com/wp-content/uploads/2013/10/Steve-Andersen-Headshot-square1.jpeg"
                        class="rounded-circle mb-3"
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
                    <img src="https://www.kingrosales.com/wp-content/uploads/2018/05/king-rosales-profile-photo-square.jpg"
                        class="rounded-circle mb-3"
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