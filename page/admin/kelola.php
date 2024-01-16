<?php 
   session_start();

   include("../../src/php/konek.php");
   if(!isset($_SESSION['valid'])){
    header("Location: login.php");
   }

   $Id = '';
   $Judul = ''; 
   $Deskripsi = ''; 
   $Yt = ''; 
   $Durasi = '';
   $Jadwal = '';
   $Harga = '';
   $Diskon = '';

   if(isset($_GET['ubah'])){
    $Id = $_GET['ubah'];
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
    <title>admin</title>
  </head>
  
  <body>
    <nav
      class="navbar navbar-expand-lg fixed-top border-bottom border-body"
      data-bs-theme="dark"    >
      <div class="container">
        <img
          src="../../src/images/IMG_7387.PNG"
          alt="profile.jpg"
          width="40px"
          class=""
        />
        <a class="navbar-brand text-white ms-3" href="index.php">Edu Komp</a>
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
            <a class="nav-link text-white" href="about.php">Course</a>
            <a class="nav-link text-white" href="index.php#pricelist"
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

<section class="section-kelola">
  <div class="container">
    <form method="POST" action="../../src/php/proses.php" enctype="multipart/form-data">
			<input type="hidden" value="<?php echo $Id; ?>" name="Id">
      <div class="mb-3 row">
				<label for="foto" class="col-sm-2 col-form-label">
					Foto 
				</label>
				<div class="col-sm-10">
					<input <?php if(!isset($_GET['ubah'])){ echo "required";} ?> class="form-control" type="file" name="foto" id="foto" accept="image/*">
				</div>
			</div>

      <div class="mb-3 row">
				<label for="Judul" class="col-sm-2 col-form-label">
					Judul
				</label>
				<div class="col-sm-10">
					<input required type="text" name="Judul" class="form-control" id="Judul" placeholder="" value="<?php echo $Judul; ?>">
				</div>
			</div>

      <div class="mb-3 row">
				<label for="Deskripsi" class="col-sm-2 col-form-label">
					Deskripsi
				</label>
				<div class="col-sm-10">
					<input required type="text" name="Deskripsi" class="form-control" id="Deskripsi" placeholder="" value="<?php echo $Deskripsi; ?>">
				</div>
			</div>

      <div class="mb-3 row">
				<label for="Yt" class="col-sm-2 col-form-label">
					Yt
				</label>
				<div class="col-sm-10">
					<input required type="text" name="Yt" class="form-control" id="Yt" placeholder="" value="<?php echo $Yt; ?>">
				</div>
			</div>

      <div class="mb-3 row">
				<label for="Durasi" class="col-sm-2 col-form-label">
					Durasi
				</label>
				<div class="col-sm-10">
					<input required type="text" name="Durasi" class="form-control" id="Durasi" placeholder="" value="<?php echo $Durasi; ?>">
				</div>
			</div>

      <div class="mb-3 row">
				<label for="Jadwal" class="col-sm-2 col-form-label">
					Jadwal
				</label>
				<div class="col-sm-10">
					<input required type="text" name="Jadwal" class="form-control" id="Jadwal" placeholder="" value="<?php echo $Jadwal; ?>">
				</div>
			</div>
      
      <div class="mb-3 row">
				<label for="Harga" class="col-sm-2 col-form-label">
					Harga
				</label>
				<div class="col-sm-10">
					<input required type="text" name="Harga" class="form-control" id="Harga" placeholder="" value="<?php echo $Harga; ?>">
				</div>
			</div>
      
      <div class="mb-3 row">
				<label for="Diskon" class="col-sm-2 col-form-label">
					Diskon
				</label>
				<div class="col-sm-10">
					<input required type="text" name="Diskon" class="form-control" id="Diskon" placeholder="" value="<?php echo $Diskon; ?>">
				</div>
			</div>

      <div class="mb-3 row mt-4">
				<div class="col">
					<?php
					if(isset($_GET['ubah'])){ 
					?>
						<button type="submit" name="aksi" value="edit" class="btn btn-primary">
              <i class="bi bi-floppy" aria-hidden="true"></i>

							Simpan Perubahan
						</button>
					<?php
						} else {
					?>
						<button type="submit" name="aksi" value="add" class="btn btn-primary">
              <i class="bi bi-floppy" aria-hidden="true"></i>
							Tambahkan
						</button>
						<?php
					}
					?>
					<a href="home.php" type="button" class="btn btn-danger">
            <i class="bi bi-reply" aria-hidden="true"></i>
						Batal
					</a>
				</div>
			</div>
      
    </form>
  </div>
</section>

  </body>
</html>
