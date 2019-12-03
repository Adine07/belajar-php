<?php
include "../config/koneksi.php";

$id=$_GET['id'];

$quer="DELETE FROM mapelsantri WHERE id='$id'";
$oper=mysqli_query($koneksi,$quer);

if($oper){
	header('location:index.php');
}
?>
