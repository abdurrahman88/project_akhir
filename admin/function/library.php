<?php
// include 'proses/koneksi.php';

function penulis($id) 
{
include 'proses/koneksi.php';
	$sql = mysqli_query($connect, "SELECT * FROM user WHERE id = $id");
	$row = mysqli_fetch_array($sql);

	return $row['nama'];	
}

function kategori($id) 
{
include 'proses/koneksi.php';
	$sql = mysqli_query($connect, "SELECT * FROM kategori WHERE id = $id");
	$row = mysqli_fetch_array($sql);

	return $row['judul'];
}
function judul($id)
{
include 'proses/koneksi.php';
	$sql = mysqli_query($connect, "SELECT * FROM artikel WHERE id = $id");
	$row = mysqli_fetch_array($sql);

	return $row['judul'];
}
?>