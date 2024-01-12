<?php
	include 'konek.php';

	function tambah_data($data, $files){

        $Judul = $data['Judul'];
        $Durasi = $data['Durasi'];
        $Jadwal = $data['Jadwal'];
        $Harga = $data['Harga'];
        $Diskon = $data['Diskon'];

		$split = explode('.', $files['foto']['name']);
		$ekstensi = $split[count($split)-1];

        $foto = $Judul.'.'.$ekstensi;

		$dir = "img/";
		$tmpFile = $files['foto']['tmp_name'];

		move_uploaded_file($tmpFile, $dir.$foto);

		$query = "INSERT INTO product VALUES(null, '$foto', '$Judul', '$Durasi', '$Jadwal', '$Harga', '$Diskon')";
		$sql = mysqli_query($GLOBALS['conn'], $query);

		return true;
	}

	function ubah_data($data, $files){

        
        $Id = $data['Id'];
        $Judul = $data['Judul'];
        $Durasi = $data['Durasi'];
        $Jadwal = $data['Jadwal'];
        $Harga = $data['Harga'];
        $Diskon = $data['Diskon'];

		$queryShow = "SELECT * FROM product WHERE Id = '$Id';";
		$sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
		$result = mysqli_fetch_assoc($sqlShow);

		if($files['foto']['name'] == ""){
			$foto = $result['Img'];
		} else {

			$split = explode('.', $files['foto']['name']);
			$ekstensi = $split[count($split)-1];

			$foto = $result['Judul'].'.'.$ekstensi;
			unlink("img/".$result['Img']);
			move_uploaded_file($files['foto']['tmp_name'], 'img/'.$foto);
		}

		$query = "UPDATE product SET Img='$foto', Judul='$Judul', Durasi='$Durasi', Jadwal='$Jadwal', Harga='$Harga', Diskon='$Diskon' WHERE Id='$Id';";
		$sql = mysqli_query($GLOBALS['conn'], $query);

		return true;
	}

	function hapus_data($data){
		$id_siswa = $data['hapus'];

		$queryShow = "SELECT * FROM tb_siswa WHERE id_siswa = '$id_siswa';";
		$sqlShow = mysqli_query($GLOBALS['conn'], $queryShow);
		$result = mysqli_fetch_assoc($sqlShow);

		//var_dump($result);

		unlink("img/".$result['foto_siswa']);

		$query = "DELETE FROM tb_siswa WHERE id_siswa = '$id_siswa';";
		$sql = mysqli_query($GLOBALS['conn'], $query);

		return true;
	}

?>