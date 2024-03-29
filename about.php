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
    <link rel="stylesheet" href="src/style/style.css" />
    <link rel="icon" href="src/images/backpack.svg" />
    <title>Tentang Kami</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <nav
      class="navbar navbar-expand-lg  fixed-top border-bottom border-body"
      data-bs-theme="dark"
    >
      <div class="container">
        <img
          src="src/images/IMG_7387.PNG"
          alt="profile.jpg"
          width="40px"
          class=""
        />
        <a class="navbar-brand text-white ms-3" href="index.html">Edu Komp</a>
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
            <a class="nav-link text-white" aria-current="page" href="index.php"
              >Home</a
            >
            <a class="nav-link text-white" href="about.php">About Us</a>
            <a class="nav-link text-white" href="index.php#pricelist">Pricelist</a>
            <a href="page/users/login.php">
              <button class="btn orange text-white" type="submit">
                LOG IN
              </button>
            </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- END NAVBAR -->

    <section class="about">
      <div class="container">
        <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title text-center">
                        <h6 class="sub-title double-line">Meet Our Team</h6>
                        <h2 class="title">Our Creative Team</h2>
                    </div>
                </div>
            </div>

        <div class="row text-center mt-5">
          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img
                src="src/images/profile.jpg"
                class="card-img-top img-about"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Muhammad Fery Syahputra</h5>
                <div class="row my-4">
                  <div class="col">NPM</div>
                  <div class="col">51421616</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img
                src="src/images/ardan.jpg"
                class="card-img-top img-about"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Ardhan Azhra Azmi</h5>
                <div class="row my-4">
                  <div class="col">NPM</div>
                  <div class="col">50421187</div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="card">
              <img
                src="src/images/adri.jpg"
                class="card-img-top img-about"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Adriansyah Nurrahman</h5>
                <div class="row my-4">
                  <div class="col">NPM</div>
                  <div class="col">50421057</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
