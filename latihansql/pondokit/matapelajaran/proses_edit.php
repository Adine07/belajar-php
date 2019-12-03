<?php

	include '../koneksi.php';
	$ID = $_POST['id'];
	$mapel = $_POST['mapel'];
	
	$sql = "UPDATE mapel SET namamapel = '$mapel' WHERE id = '$ID'";
	
	mysqli_query($connect, $sql);
	header('location:index.php');
	
?>
