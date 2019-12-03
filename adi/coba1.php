<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adine | Coba 1</title>
</head>
<body>

	<form action="coba1.php" method="post">
		Nilai: <input type="number" name="nilai" value="<?php echo isset($_POST['nilai'])?$_POST['nilai']:""; ?>">
		<input type="submit"><br>

		<?php
			$nilai = isset($_POST['nilai'])?$_POST['nilai']: "";
			echo $nilai;
 		?>
		<br><br>
		Nama: <input type="text" name="nama" value="<?php echo isset($_POST['nama'])?$_POST['nama']:""; ?>">
		<input type="submit"><br>
		<?php
			$nama = isset($_POST['nama'])?$_POST['nama']: "";
			echo $nama;
 		?>

	</form>
	
</body>
</html>