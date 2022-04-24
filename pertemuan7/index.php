<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

  <!-- my css -->
  <link rel="stylesheet" href="styles.css" />
  <link rel="icon" href="img/logo-sapari.jpg" class="img rounded-circle">

  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <title>
    XYZ | Company Profile
  </title>
</head>

<body id="home">
  <!-- navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="#"> <img src="img/logo-sapari.jpg" class="rounded-circle" alt="" width="60"
          height="50" /> </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#partnership">Mitra Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#project">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Kontak</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Masuk
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Login</a></li>
              <li><a class="dropdown-item" href="#">Daftar Akun</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->

  <!-- jumbotron -->
  <section class="jumbotron">
    <div class="container">
      <div class="row">
        <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
          <h1 class=" display-5 fw-bold mt-5"> <?php echo "<h1>Selamat Datang, " . $row["name"] ."!". "</h1>"; ?></h1>
          <p class="fs-5 mt-5">
            <strong>Sapari Delivery</strong> adalah sebuah startup e-commerce yang bergerak di bidang kuliner khususnya
            loji dan sekitarnya.
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <div class="buttonHero">
              <a href="#" class="btn btn-md"><b style="color: #ffff;">PILIH SEKARANG</b> </a>
            </div>

          </div>
        </div>
        <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000">
          <img src="img/hero-section.svg" class="img-fluid float-end mt-5" width="500" alt="" />
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffff" fill-opacity="1"
        d="M0,288L48,250.7C96,213,192,139,288,128C384,117,480,171,576,197.3C672,224,768,224,864,192C960,160,1056,96,1152,80C1248,64,1344,96,1392,112L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- akhir jumbotron -->

  <!-- about -->
  <section id="about">
    <div class="container mb-3">
      <div class="row text-center">
        <div class="col">
          <h2>Tentang Kami</h2>
        </div>
      </div>

      <div class="row justify-content-center mt-3 text-center">
        <div class="col-md-4 fs-5" data-aos="zoom-in" data-aos-duration="1000">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sunt sed maxime praesentium. Illum,
            similique. Officiis iste et perspiciatis dignissimos.</p>
        </div>
        <div class="col-md-4 fs-5" data-aos="zoom-in" data-aos-duration="1000">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sunt sed maxime praesentium. Illum,
            similique. Officiis iste et perspiciatis dignissimos.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir about -->

  <!-- partnership -->
  <section id="partnership">
    <div class="container">
      <div class="row">
        <div class="col text-center">
          <h2>Mitra Kami</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-4 col-6" data-aos="flip-up" data-aos-duration="1000">
          <img src="img/partnership-1.png" class="img-fluid" alt="Partnership 1" />
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="flip-up" data-aos-duration="1000">
          <img src="img/partnership-1.png" class="img-fluid" alt="Partnership 1" />
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="flip-up" data-aos-duration="1000">
          <img src="img/partnership-1.png" class="img-fluid" alt="Partnership 1" />
        </div>
        <div class="col-lg-3 col-md-4 col-6" data-aos="flip-up" data-aos-duration="1000">
          <img src="img/partnership-1.png" class="img-fluid" alt="Partnership 1" />
        </div>
      </div>
  </section>
  <!-- akhir partnership -->

  <!-- project -->
  <section id="project">
    <div class="container">
      <div class="row">
        <div class="col mb-3 text-center">
          <h2>Produk</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 mb-3" data-aos="zoom-in-down" data-aos-duration="1000">
          <div class="card">
            <img src="img/1.jpg" class="card-img-top" alt="Project 1" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3" data-aos="zoom-in-down" data-aos-duration="1500">
          <div class="card">
            <img src="img/2.jpg" class="card-img-top" alt="Project 2" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in-down" data-aos-duration="2000">
          <div class="card">
            <img src="img/3.jpg" class="card-img-top" alt="Project 3" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in-down" data-aos-duration="2500">
          <div class="card">
            <img src="img/4.jpg" class="card-img-top" alt="Project 4" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in-down" data-aos-duration="3000">
          <div class="card">
            <img src="img/5.jpg" class="card-img-top" alt="Project 5" />
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- akhir project -->

  <!-- contact -->
  <section id="contact">
    <div class="container" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1000">
      <div class="row">
        <div class="col text-center">
          <h2>Kontak</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" aria-describedby="email"
                placeholder="namaEmail@gmail.com" />
            </div>

            <div class="mb-3">
              <label for="pesan" class="form-label">Pesan</label>
              <textarea class="form-control" id="pesan" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Kirim</button>
          </form>
        </div>
      </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#00cba9" fill-opacity="1"
        d="M0,32L48,69.3C96,107,192,181,288,181.3C384,181,480,107,576,90.7C672,75,768,117,864,117.3C960,117,1056,75,1152,58.7C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>
  <!-- akhir contact -->

  <!-- footer -->
  <footer class="text-white text-center pb-3" style="background-color: #00cba9">
    <p>Dibuat dan dikembangkan oleh <a href="https://www.instagram.com/gilang.m14/" class="text-white fw-bold">Gilang
        Maulana</a></p>
  </footer>
  <!-- akhir footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>

  <!-- JS AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>

</body>

</html>