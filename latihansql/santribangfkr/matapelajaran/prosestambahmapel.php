<?php
	include "../config/koneksi.php";
	
	$matapelajaran=$_POST['matapelajaran'];
	
	$quer="INSERT INTO matapelajaran (matapelajaran) VALUES ('$matapelajaran')";
	$oper=mysqli_query($koneksi,$quer);
	
	if($oper){
		echo"data berhasil di tambah<br><br><a href=\"index.php\">kembali ke halaman utama </a>";
	}

?>
