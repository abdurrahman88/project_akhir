<?php
session_start();
if (isset($_SESSION['login'])) {
	include 'koneksi.php';

	$judul  = isset($_POST['judul']) ? $_POST['judul'] : '';
	$id  = isset($_POST['id']) ? $_POST['id'] : '';

	if (!empty($judul)) {
		mysqli_query($connect, " UPDATE kategori SET judul = '$judul' WHERE id = '$id'");
		header("location:../kategori.php");
	} else {
		echo "silahkan lengkapi data <a href='../edit_kategori.php'>blog</a>";
	}
} else {
	echo "please <a href='../index.php'>login</a>";
}
?>