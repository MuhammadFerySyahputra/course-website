<?php
	include 'fungsi.php';
	session_start();

	if(isset($_POST['aksi'])){
		if($_POST['aksi'] == "add"){
			
			$berhasil = tambah_data($_POST, $_FILES);

			if($berhasil){
				$_SESSION['hasil'] = "Data berhasil ditambahkan,success";
				header("location: ../../page/admin/home.php");
			} else {
				echo $berhasil;
			}

		} else if($_POST['aksi'] == "edit"){

			$berhasil = ubah_data($_POST, $_FILES);
			
			if($berhasil){
				$_SESSION['hasil'] = "Data berhasil diperbarui,success";
				header("location: ../../page/admin/home.php");
			} else {
				header("location: ../../page/admin/login.php");
				echo $berhasil;
			}
		}

	}

	if(isset($_GET['hapus'])){

		$berhasil = hapus_data($_GET);

		if($berhasil){
			$_SESSION['hasil'] = "Data berhasil dihapus,success";
			header("location: ../../page/admin/home.php");
		} else {
			echo $berhasil;
		}
	}
?>