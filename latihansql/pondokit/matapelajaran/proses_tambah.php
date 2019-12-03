<?php

	include '../koneksi.php';
	$mapel = $_POST['mapel'];
	
	$sql = "insert into mapel (namamapel) values ('$mapel')";
	
	mysqli_query($connect, $sql);
	header('location:index.php');
	
?>
