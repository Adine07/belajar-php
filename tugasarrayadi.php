<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adine | Tugas Array</title>
</head>
<body>

	<h1>Ini Judul page</h1>
	<hr>
	
	<p>$adi = array('hai', 13, 'kamu?');</p>
	<p>echo $adi[1];</p>

	<button onclick="arraycoba()">ini tombol</button>
	<br>

	<h4>Hasil dari kode di atas adalah:</h4><br>
	<b id="tampil"></b>



	<script>
		function arraycoba(){
			<?php 
			$adi = array('hai', 13, 'kamu?');
			echo "document.getElementById('tampil').innerHTML = '$adi[1]'";
			?>
		}
	</script>

	
</body>
</html>