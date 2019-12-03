<?php
include "../config/koneksi.php";
include "../menu.php";
	$id		 =$_POST['id'];
	$nama    =$_POST['nama'];
	$password=$_POST['password'];
	$email   =$_POST['email'];
	$ttl     =$_POST['ttl'];
	
	$quer="UPDATE user SET nama='$nama' , password='$password' , email='$email' , ttl='$ttl' WHERE id='$id'";
	$oper=mysqli_query($koneksi,$quer);
	
	if ($oper){
		header("location:index.php");
	}else{
		echo "gagal edit";
	}


?>
