<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Prodamas Plus</title>
  <!--icon-->
  <link href="img/logoprodamas.png" rel="icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="beranda.css" />
  <!--Goofle Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Montserrat&display=swap" rel="stylesheet" />
  <!--font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

  <!--style-->
  <style>
    .footer-link:hover {
      color: #fff;
    }
  </style>
</head>

<body>
  <!--navber-->
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #4d148c">
    <div class="container">
      <img src="img/logoprodamas.png" alt="" width="40" height="40" class="d-inline-block align-text-top" />
      <a class="navbar-brand" style="padding-left: 5px; font-family: Inter, sans-serif" href="#">PRODAMAS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto" style="padding-right: 20px; font-weight: lighter; font-size: 13px; font-family: Inter, sans-serif">
          <li class="nav-item">
            <a class="nav-link active" href="#"><u>Beranda</u></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Bidang/bidang.php">Bidang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../bincang prodamas/bicangprodamas.php">Bincang Prodamas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Informasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../media _ kritik/media.php">Media</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" style="font-family: 'Font Awesome 5 Free'; font-weight: 600; border-radius: 30px; height: 30px" placeholder=" &#xf002;" aria-label="Search" />
        </form>
      </div>
    </div>
  </nav>
  <!--end navbar-->

  <!--Banner-->
  <div class="banner" style="text-shadow: 8px 8px 10px black;">
    <video id="background-video" autoplay loop muted poster="kota.png">
      <source src="kedirikota.mp4" type="video/mp4" />
    </video>
    <h1>PRODAMAS PLUS</h1>
  </div>
  <!--end Banner-->

  <!--Tentang-->
  <section id="tentang">
    <div class="container">
      <div class="row mt-5">
        <div class="col text-center">
          <h2>Tentang</h2>
        </div>
      </div>
      <div class="row mt-3" style="font-family: Montserrat, sans-serif">
        <div class="col text-center">
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores neque ex labore quaerat corrupti hic accusantium cum animi laborum! Blanditiis minima voluptatum est reprehenderit deserunt consequatur, culpa hic suscipit
            veniam omnis doloremque natus tenetur atque qui neque eius repellat minus, dolor sit amet consectetur adipisicing elit. Maiores neque ex labore quaerat corrupti hic accusantium cum animi laborum! Blanditiis minima voluptatum
            est reprehenderit deserunt consequatur.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!--End tentang-->

  <!--potensi kecamatan-->
  <div class="container-fluid">
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-sm-6 col-md-3 hover-card mb-4">
          <div class="card">
            <img src="img/kota.png" class="card-img-top rounded" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Kecamatan Kota</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3 hover-card mb-4">
          <div class="card">
            <img src="img/mojoroto.png" class="card-img-top rounded" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Kecamatan Kota</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-3 hover-card mb-4">
          <div class="card">
            <img src="img/pesantren.png" class="card-img-top rounded" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Kecamatan Kota</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--end potensi kecamatan-->

  <!--carousel-->
  <div class="container-fluid carousel-contain py-5 mt-5">
    <div class="container">
      <div id="carouselExampleCaptions" class="carousel slide col-lg-8 offset-lg-2" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../Beranda/img/slide1.jpeg" class="d-block w-100" alt="Kampung Keren">
          </div>
          <div class="carousel-item">
            <img src="../Beranda/img/slide2.jpeg" class="d-block w-100" alt="Kampung Keren">
          </div>
          <div class="carousel-item">
            <img src="../Beranda/img/slide3.jpeg" class="d-block w-100" alt="Kampung Keren">
          </div>
          <div class="carousel-item">
            <img src="../Beranda/img/slide4.jpeg" class="d-block w-100" alt="Kampung Keren">
          </div>
          <div class="carousel-item">
            <img src="../Beranda/img/slide5.jpeg" class="d-block w-100" alt="Kampung Keren">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
  <!--end carousel-->

  <!--persentase-->
  <section id="persentase">
    <div class="container mt-5">
      <div class="row text-center justify-content-center m-5">
        <h2 class="mb-5">Persentase Pembangunan Prodamas Plus 2021</h2>
        <div class="col-sm-6 col-md-4 mb-4">
          <div class="img">
            <img src="img/1.png" class="rounded-circle" alt="1" width="150" height="150" />
            <div class="img-body">
              <h5 class="img-title mt-4">Ekonomi</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-4">
          <div class="img">
            <img src="img/2.png" class="rounded-circle" alt="2" width="150" height="150" />
            <div class="img-body">
              <h5 class="img-title mt-4">Kesehatan</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-4">
          <div class="img">
            <img src="img/3.png" class="rounded-circle" alt="3" width="150" height="150" />
            <div class="img-body">
              <h5 class="img-title mt-4">Sosial Budaya</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-4">
          <div class="img">
            <img src="img/4.png" class="rounded-circle" alt="4" width="150" height="150" />
            <div class="img-body">
              <h5 class="img-title mt-4">Infrastruktur</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-4">
          <div class="img">
            <img src="img/5.png" class="rounded-circle" alt="5" width="150" height="150" />
            <div class="img-body">
              <h5 class="img-title mt-4">Kepemudaan</h5>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mb-4">
          <div class="img">
            <img src="img/6.png" class="rounded-circle" alt="6" width="150" height="150" />
            <div class="img-body">
              <h5 class="img-title mt-4">Pendidikan</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end Persentase-->

  <!--artikel-->
  <div class="container artikel mb-5">
    <h2 class="mb-5 text-center" style="font-family: Inter, sans-serif">Informasi Terupdate</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <img src="../Beranda/img/slide3.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Launching Kampung Keren</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="../Beranda/img/slide4.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Kampung Keren</h5>
            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <img src="../Beranda/img/slide5.jpeg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
          </div>
        </div>
      </div>
    </div>
    <a href="../bincang prodamas/bicangprodamas.php">
      <h6 class="text-end mt-3"><u>Info Lainnya <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
          </svg></u></h6>
    </a>
  </div>
  <!--end artikel-->

  <!--berlangganan-->
  <div class="container py-5 mb-5">
    <div class="cardberlangganan">
      <div class="card-body">
        <h5 class="card-title text-center mb-4 mt-5" style="font-weight: bold;font-family:Inter, sans-serif;">Berlangganan</h5>
        <p class="card-text text-center" style="font-family: Montserrat, sans-serif;;">Dapatkan informasi menarik dan terupdate tentang Prodamas Kota Kediri dengan mendaftarkan email Anda.</p>
        <form>
          <div class="col-8 offset-2 mb-3">
            <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailberlangganan">
          </div>
        </form>
        <div class="d-grid gap-2 col-6 mx-auto mb-5">
          <button class="rounded" type="button" style="background-color: #FF6600; border:none;color:white;height: 35px">Mulai Berlangganan</button>
        </div>
      </div>
    </div>
  </div>
  <!--end berlangganan-->

  <!-- Awal footer -->
  <footer>
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-1 col-lg-2 footer-logo" style="margin-top: 45px">
            <img class="logo-footer" src="img/logoprodamas.png" width="110" height="110" alt="logo-footer" />
            <div style="margin-top: 12px">
              <img src="img/Asset5.png" alt="logo-prodamas-text" width="110" height="27" class="d-inline-block" />
            </div>
          </div>
          <div class="col-md-5 col-lg-5 offset-lg-2 footer-contact" style="margin-top: 45px; margin-left: 0px; color: white">
            <h5 style="font-family: Inter, sans-serif">Pemerintah Kota Kediri</h5>
            <p style="font-size: small">
              Jalan Basuki Rahmat No.15, Kelurahan Pocananan, <br />
              Kota kediri, Jawa Timur 64146
            </p>
            <p style="font-family: 'Font Awesome 5 Free'; font-weight: 600">&#xf0e0; prodamas.pemkotkediri@gmail.com</p>
            <p style="font-family: 'Font Awesome 5 Free'; font-weight: 600">&#xf095; (0354) 682955</p>
          </div>
          <div class="col-md-6 col-lg-5 footer-links" style="margin-top: 70px; color: white">
            <div class="row">
              <div class="col-md-6">
                <a class="footer-link" href="../Beranda/index.php">Beranda</a> <br />
                <a class="footer-link" href="../Bidang/bidang.php">Bidang</a> <br />
                <a class="footer-link" href="../bincang prodamas/bicangprodamas.php">Bincang Prodamas</a> <br />
                <a class="footer-link" href="#Informasi">Informasi</a>
              </div>
              <div class="col-md-6">
                <a class="footer-link" href="../media _ kritik/media.php">Media</a> <br />
                <a class="footer-link" href="#section-4">Visi dan Misi</a> <br />
                <a class="footer-link" href="#section-4">Dashboard</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 footer-copyright" style="color: white">&copy; 2021 Prodamas Plus</div>
          <div class="col-md-6 footer-social">
            <a href="https://www.youtube.com/channel/UCX6KxXBUbivqWXTku0nnPbA"><i class="fab fa-youtube"></i></a>
            <a href="https://www.instagram.com/prodamasplus/"><i class="fab fa-instagram"></i></a>
            <a href="https://vt.tiktok.com/ZSejpETUx/"><i class="fab fa-tiktok"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Akhir footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>