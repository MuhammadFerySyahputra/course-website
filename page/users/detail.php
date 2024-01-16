<?php 
   session_start();
   include("../../src/php/konek.php");
   if(!isset($_SESSION['valid'])){
    header("Location: ../../login.php");
   }

   $Id = '';
   $Judul = ''; 
   $Deskripsi = ''; 
   $Yt = ''; 
   $Durasi = '';
   $Jadwal = '';
   $Harga = '';
   $Diskon = '';

  if(isset($_GET['isi'])){
    $Id = $_GET['isi'];
    $query = "SELECT * FROM product WHERE Id = '$Id';";
	  $sql = mysqli_query($conn, $query);

	  $result = mysqli_fetch_assoc($sql);

    

	  $Judul = $result['Judul'];
	  $Deskripsi = $result['Deskripsi'];
	  $Yt = $result['Yt'];
    $Durasi = $result['Durasi'];
    $Jadwal = $result['Jadwal'];
    $Harga = $result['Harga'];
    $Diskon = $result['Diskon'];
  } 

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11.0.5/swiper-bundle.min.css"
    />
    <link rel="icon" href="src/images/backpack.svg" />
    <link rel="stylesheet" href="../../src/style/home.css" />
    <title>detail</title>
  </head>
  <body>
    <nav
      class="navbar navbar-expand-lg fixed-top border-bottom border-body"
      data-bs-theme="dark"
    >
      <div class="container">
        <img
          src="../../src/images/IMG_7387.PNG"
          alt="profile.jpg"
          width="40px"
          class=""
        />
        <a class="navbar-brand text-white ms-3" href="home.php">Edu Komp</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link text-white" aria-current="page" href="home.php"
              >Home</a
            >
            <a class="nav-link text-white" href="../../about.php">About Us</a>
            <a class="nav-link text-white" href="course.php">Course</a>
            <a class="nav-link text-white" href="../../index.php#pricelist"
              >Pricelist</a
            >
            <a href="../../src/php/logout.php">
              <button class="btn orange text-white" type="submit">
                LOG OUT
              </button>
            </a>
          </div>
        </div>
      </div>
    </nav>

    <section class="detailin">
      <div class="container">
        <div class="row d-flex justify-content-center isi-detailin bg-info bg-opacity-10 border border-info">
          <img src="../../src/php/img/<?php echo $result['Img']; ?>" class="w-75 mt-5" alt="" />

          <div class="text-center mt-4">
            <h1><?php echo $result['Judul']; ?></h1>
          </div>

          <div class="row w-75 mt-4">
            <h3>Deskripsi</h3>
            <p>
              <?php echo $result['Deskripsi']; ?>
            </p>
          </div>

          <div class="container text-center mt-4">
            <div class="row justify-content-center align-item-center fs-4">
              <div class="col-6 col-sm-4 m-3 bg-opacity-75 bg-warning border border-warning rounded-end">
                Durasi
              </div>
              <div class="col-6 col-sm-4 m-3 bg-opacity-75 bg-warning border border-warning rounded-end">
                Jadwal
              </div>

              <!-- Force next columns to break to new line at md breakpoint and up -->
              <div class="w-100 d-none d-md-block"></div>
              <div class="col-6 col-sm-4"><?php echo $result['Durasi']; ?></div>
              <div class="col-6 col-sm-4"><?php echo $result['Jadwal']; ?></div>
            </div>
            <div class="mt-4  ">
              <div class="container">
              <div class="d-flex justify-content-center">
                  <h3 class="me-3"> 
                    <b style="text-transform: uppercase;">Rp  
                      <?php echo $result['Diskon']; ?>
                    </b>
                  </h3>
                  <h5>
                    <s>
                      <b style="text-transform: uppercase;"> Rp
                        <?php echo $result['Harga']; ?>
                      </b>
                    </s>
                  </h5>
                </div>
                <a href="detail.php?isi=<?php echo $result['Id']; ?>" class="btn orange">BUY NOW!!</a>
              </div>
            </div>

          </div>
          

          <div class="yt mt-5 text-center">
            <iframe
              class="mt-3"
              width="450"
              height="250"
              src="<?php echo $result['Yt']; ?>"
              title="YouTube video player"
              frameborder="0"
              allow=" autoplay; "
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </section>

    <section class="mt-4">
      <h2 class="text-center">MUNGKIN KAMU TERTARIK</h2>
      <div class="card-group container swiper slide-content2">
        <div class="swiper-wrapper">
      <?php
      $query = "SELECT * FROM product;";
      $sql = mysqli_query($conn, $query);
      while($result = mysqli_fetch_assoc($sql)){
          ?>
          <div class="card me-3 mt-3 swiper-slide m-2 " style="width: 18rem">
            <img
              src="../../src/php/img/<?php echo $result['Img']; ?>"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title"><?php echo $result['Judul']; ?></h5>
              <div class="row text-start pt-4">
                <div class="col-12 col-md-6">
                  <h5 class="card-title">Normal</h5>
                  <h5 class="card-title">
                    <s><?php echo $result['Harga']; ?></s>
                  </h5>
                </div>
                <div class="col-12 col-md-6">
                  <h5 class="card-title">Promo</h5>
                  <h5 class="card-title"><?php echo $result['Harga']; ?></h5>
                </div>
                <a
                  href="detail.php?isi=<?php echo $result['Id']; ?>"
                  class="btn orange"
                  >LIHAT</a
                >
              </div>
            </div>
          </div>
        <?php 
			      }
			    ?>
        </div>
        <div class="m-5 baten">
          <div class="swiper-pagination "></div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../../src/js/script.js"></script>
  </body>
</html>
