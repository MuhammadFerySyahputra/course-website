<?php 
   session_start();
   include("../../src/php/konek.php");
   if(!isset($_SESSION['valid'])){
    header("Location: ../../login.php");
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
    <title>Document</title>
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

    <section class="isi_home">
      <div class="container">
        <div class="row d-flex">
        <?php
            $query = "SELECT * FROM product;";
            $sql = mysqli_query($conn, $query);
            while($result = mysqli_fetch_assoc($sql)){
              ?>
          
          <div class="card me-3 mt-3" style="width: 18rem">
			      <img src="../../src/php/img/<?php echo $result['Img']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $result['Judul']; ?></h5>
              <div class="row text-start pt-4">
                <div class="col-12 col-md-6">
                  <h5 class="card-title">Normal </h5>
                  <h5 class="card-title"><s><?php echo $result['Harga']; ?></s></h5>
                </div>
                <div class="col-12 col-md-6">
                  <h5 class="card-title">Promo </h5>
                  <h5 class="card-title"><?php echo $result['Harga']; ?></h5>
                  
                </div>
                <a href="detail.php?isi=<?php echo $result['Id']; ?>" class="btn orange">LIHAT</a>
              </div>
            </div>
          </div>
          <?php 
			        }
			      ?>
        </div>
      </div>
    </section>

    

  </body>
</html>
