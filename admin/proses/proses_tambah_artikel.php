<?php
session_start();
if (isset($_SESSION['login'])) {
	include 'koneksi.php';
	$judul            = isset($_POST['judul']) ? $_POST['judul'] : '';
	$isi			  = isset($_POST['isi']) ? $_POST['isi'] : '';
	$gambar_nama	  = $_FILES['gambar']['name'];
	$gambar_size      = $_FILES['gambar']['size'];
	$gambar_type      = $_FILES['gambar']['type'];
	$gambar_tmp_name  = $_FILES['gambar']['tmp_name'];
	$kategori 		  = isset($_POST['kategori']) ? $_POST['kategori'] : '';
	$ext 			  = explode('.', $gambar_nama);
	$penulis		  = isset($_POST['penulis']) ? $_POST['penulis'] : '';
	$tanggal		  = date('Y-m-d H:i:s', time());
	$status			  = isset($_POST['status']) ? $_POST['status'] : '';
	$folder			  = '../gambar/';

		if (!empty($judul) && !empty($isi) && !empty($kategori)) {
			if (!is_dir($folder)) {
				mkdir($folder, 777);
			}
			if (!empty($gambar_nama)) {
				$newName = rand(11111,99999);
				$nama_file = $newName.'.'.end($ext);
				move_uploaded_file($gambar_tmp_name, $folder.$nama_file);
				mysqli_query($connect, "INSERT INTO artikel VALUES (null,'$judul', '$isi', '$gambar_nama', '$kategori', '$penulis', '$tanggal', '$status')");
			} else {
				mysqli_query($connect, "
					INSERT INTO artikel 
					VALUES (null,'$judul', '$isi', null, '$kategori', '$penulis', '$tanggal', '$status')");
			}
			header("location:../artikel.php");
		} else {
			echo "Silahkan Lengkapi data";
		}

} else {
	echo "Please";
}
?>