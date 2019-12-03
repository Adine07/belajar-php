<?php

	include '../koneksi.php';
	$ID = $_POST['id'];
	$idsantri = $_POST['santri'];
	$idmapel = $_POST['idmapel'];
	$nilaiangka = $_POST['nilaiangka'];
	
	if ($nilaiangka >= 0 && $nilaiangka <= 100){
		$nilaihuruf = 'A';
	}else{
		$nilaihuruf = '-';
	}
	
	$sql = "UPDATE mapelsantri SET idsantri = '$idsantri', idmapel = '$idmapel', nilaiangka = '$nialiangka', nilaihuruf = '$nilaihuruf' WHERE id = '$ID'";
	
	mysqli_query($connect, $sql);
	header('location:index.php');
?>
