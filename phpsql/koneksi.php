<?php

    $server     = "localhost";
    $user       = "root";
    $password   = "123";
    $db         = "phpsql";

    $con        = new mysqli($server,$user,$password,$db);

    if (!$con){
        die("Koneksi Gagal : ". mysqli_connect_error());
    }

?>
