<html>
	<head>
		<title>Edit MAPEL</title>
	</head>
	<body>
		<?php
			include '../koneksi.php';
			$ID		= $_GET['id'];
			$sql	= "select * from mapel where id=$ID";
			$result	= mysqli_query($connect,$sql);
			$row	= mysqli_fetch_assoc($result);
		?>
		<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>"><br>
			<label>
				MATAPELAJARAN :<br>
				<input type="text" name="mapel" value="<?php echo $row['namamapel']; ?>"><br>
			</label>
			<input type="submit" value="Kirim">
		</form>
	</body>
</html>
