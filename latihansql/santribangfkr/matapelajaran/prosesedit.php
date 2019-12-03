<?php
	include "../config/koneksi.php";
	
	$id            =$_POST['id'];
	$matapelajaran =$_POST['matapelajaran'];
	
	$quer="UPDATE matapelajaran SET matapelajaran='$matapelajaran' WHERE id='$id'";
	$oper=mysqli_query($koneksi,$quer);
	
	if($oper){
		header("location:index.php");
	}
	
?>
