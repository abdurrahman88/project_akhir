<?php
session_start();
if (isset($_SESSION['login'])) {

	// $connect = mysqli_connect("localhost", "root", "123", "pondok_it");
	include 'koneksi.php';
	
	$nama    = isset($_POST['nama']) ? $_POST['nama'] : '';
	$email  = isset($_POST['email']) ? $_POST['email'] : '';
	$password   = isset($_POST['password']) ? $_POST['password'] : '';


	if (!empty($nama) && !empty($email) && !empty($password)) {

		mysqli_query($connect, "INSERT INTO user VALUES (null,'$nama', '$email', '$password')");

		header("location:../user.php");

	} else {

		echo "Silahkan lengkapi data <a href='../tambah_user.php'>user</a>";

	}


} else {

  	echo "Please <a href='../login.php'>login</a> first.";

}
?>
