<?php 
	include 'koneksi.php';
	$nama		= isset($_POST['nama']) ? $_POST['nama'] : '';
	$email		= isset($_POST['email']) ? $_POST['email'] : '';
	$komentar	= isset($_POST['komentar']) ? $_POST['komentar'] : '';
	$number	= isset($_POST['number']) ? $_POST['number'] : '';
	$id	= isset($_POST['id']) ? $_POST['id'] : '';

	if (!empty($nama) && !empty($email) && !empty($komentar) && !empty($number)) {
		mysqli_query($connect, "INSERT INTO comment VALUES (null, '$nama', '$komentar', '$email', '$number', $id)");
		header("location:../../post.php?id=$id");
	} else {
		echo "Silhkan coba kembali";
	}
?>