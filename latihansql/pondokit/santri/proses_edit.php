<?php

	include '../koneksi.php';
	$ID = $_POST['id'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$passwd = $_POST['password'];
	$tgl2lahir = $_POST['tgl2lahir'];
	
	$sql = "UPDATE santri SET nama = '$nama', email = '$email' , passwd = '$passwd' , tgllahir = '$tgl2lahir' WHERE id = '$ID'";
	
	mysqli_query($connect, $sql);
	header('location:index.php');
	
?>
