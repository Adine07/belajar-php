<?php

include 'koneksi.php';

$nama = $_POST['name'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$sql = "INSERT INTO santri(name, gender, address) VALUES ('$nama', '$gender', '$address')";

mysqli_query($konek, $sql);
header('location: index.php');