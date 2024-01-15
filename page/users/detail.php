<?php 
   session_start();
   include("../../src/php/konek.php");
   if(!isset($_SESSION['valid'])){
    header("Location: ../../login.php");
   }
   $query = "SELECT * FROM product;";
   $sql = mysqli_query($conn, $query);
   $result = mysqli_fetch_assoc($sql)
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
        <div
          class="row d-flex justify-content-center isi-detailin bg-info bg-opacity-10 border border-info"
        >
          <img src="../../src/images/content/2.png" class="w-75 mt-5" alt="" />

          <div class="text-center mt-4">
            <h1>judul</h1>
          </div>

          <div class="row w-75 mt-4">
            <h3>Deskripsi</h3>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Architecto explicabo ea non ad, quae dolorem unde repudiandae
              consequatur natus, nesciunt sit quia. Amet sapiente, aperiam
              voluptatibus quasi repellendus beatae. Dolore, non! Numquam
              necessitatibus reprehenderit reiciendis iste facere excepturi
              tempore illo.
            </p>
          </div>

          <div class="container text-center mt-4">
            <div class="row justify-content-center align-item-center fs-4">
              <div
                class="col-6 col-sm-4 m-3 bg-opacity-75 bg-warning border border-warning rounded-end"
              >
                Durasi
              </div>
              <div
                class="col-6 col-sm-4 m-3 bg-opacity-75 bg-warning border border-warning rounded-end"
              >
                Jadwal
              </div>

              <!-- Force next columns to break to new line at md breakpoint and up -->
              <div class="w-100 d-none d-md-block"></div>

              <div class="col-6 col-sm-4">1 bulan</div>
              <div class="col-6 col-sm-4">14 february 2023</div>
            </div>
          </div>

          <div class="yt mt-5 bg-info text-center">
            <iframe
              class="mt-3"
              width="450"
              height="250"
              src="https://www.youtube.com/embed/videoseries?si=DV8nS1rd3tQfBj3e&amp;list=PLZS-MHyEIRo59lUBwU-XHH7Ymmb04ffOY"
              title="YouTube video player"
              frameborder="0"
              allow=" autoplay; "
              allowfullscreen
            ></iframe>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="home-card m-4 d-flex flex-row mb-3">
      <div class="container">
        <div class="row d-flex">
          <h2 class="text-center">MUNGKIN KAMU TERTARIK</h2>
          <?php
            $query = "SELECT * FROM product;";
            $sql = mysqli_query($conn, $query);
            
            while($result = mysqli_fetch_assoc($sql)){
              
              ?>
          <div class="card me-3 mt-3" style="width: 18rem">
            <img
              src="../../src/php/img/<?php echo $result['Img']; ?>"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h5 class="card-title"><?php echo $result['Judul']; ?></h5>
              <a
                href="detail.php?isi=<?php echo $result['Id']; ?>"
                class="btn orange"
                >LIHAT</a
              >
            </div>
          </div>
          <?php 
			        }
			      ?></div>
      </div>
    </section> -->

    <section>
      <div class="swiper card-group slide-content2">
              <div class="wrapper swiper-wrapper">
                <a href="register.php" class="card swiper-slide"style="width: 18rem">
                  <img
                    src="../../src/images/content/6.png"
                    class="card-img-top program-img"
                    alt="..."
                  />
                  <div class="card-body">
                    <h6 class="card-title">Fundamental JavaScript</h6>
                  </div>
                </a>
                
                <a href="register.php" class="card swiper-slide"style="width: 18rem">
                  <img
                    src="../../src/images/content/6.png"
                    class="card-img-top program-img"
                    alt="..."
                  />
                  <div class="card-body">
                    <h6 class="card-title">Fundamental JavaScript</h6>
                  </div>
                </a>
                
                <a href="register.php" class="card swiper-slide"style="width: 18rem">
                  <img
                    src="../../src/images/content/6.png"
                    class="card-img-top program-img"
                    alt="..."
                  />
                  <div class="card-body">
                    <h6 class="card-title">Fundamental JavaScript</h6>
                  </div>
                </a>
                
                <a href="register.php" class="card swiper-slide"style="width: 18rem">
                  <img
                    src="../../src/images/content/6.png"
                    class="card-img-top program-img"
                    alt="..."
                  />
                  <div class="card-body">
                    <h6 class="card-title">Fundamental JavaScript</h6>
                  </div>
                </a>
                
              </div>
              <div class="m-5 baten">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
    </section>
  </body>
  <script src="../src/js/script.js"></script>
</html>
