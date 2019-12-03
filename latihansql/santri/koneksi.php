<?php
    $server = "localhost";
    $user = "root";
    $passwd = "123";
    $db = "pondok";

    $konek = mysqli_connect($server,$user,$passwd,$db);

    if (!$konek){
        die("Koneksi gagal :".mysqli_connection_error());
    }