<?php
session_start();
if (isset($_SESSION['login'])) {

	// $connect = mysqli_connect("localhost", "root", "123", "pondok_it");
	include 'koneksi.php';
	
	$judul    = isset($_POST['judul']) ? $_POST['judul'] : '';

	if (!empty($judul)) {

		mysqli_query($connect, "INSERT INTO kategori VALUES (null,'$judul')");

		header("location:../kategori.php");

	} else {

		echo "Silahkan lengkapi data <a href='../tambah_tambah.php'>Blog kategori</a>";

	}


} else {

  	echo "Please <a href='../login.php'>login</a> first.";

}
?>