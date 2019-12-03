<?php

	$server = "localhost";
	$username = "root";
	$passwd = "123";
	$dbname = "pondokit";

	$connect = mysqli_connect($server, $username, $passwd, $dbname);
	
	if (!$connect){
		die("Connection failed: " . mysqli_connect_error());
	}
