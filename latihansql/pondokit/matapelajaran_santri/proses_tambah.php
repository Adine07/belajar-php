<?php

	include '../koneksi.php';
	$idsantri = $_POST['santri'];
	$idmapel = $_POST['idmapel'];
	$nilaiangka = $_POST['nilaiangka'];
	
	if ($nilaiangka >= 0 && $nilaiangka <= 100){
		$nilaihuruf = 'A';
	}else{
		$nilaihuruf = '-';
	}
	
	$sql = "insert into mapelsantri (idsantri,idmapel,nilaiangka,nilaihuruf) values ('$idsantri','$idmapel','$nilaiangka','$nilaihuruf')";
	
	mysqli_query($connect, $sql);
	header('location:index.php');
	
?>
