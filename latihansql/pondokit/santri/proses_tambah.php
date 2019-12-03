<?php

	include '../koneksi.php';
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$passwd = $_POST['password'];
	$tgl2lahir = $_POST['tgl2lahir'];
	
	$sql = "insert into santri (nama,email,passwd,tgllahir) values ('$nama','$email','$passwd','$tgl2lahir')";
	
	mysqli_query($connect, $sql);
	header('location:index.php');
	
?>
