<html>
	<head>
		<title>Edit Profile</title>
	</head>
	<body>
		<?php
			include '../koneksi.php';
			$ID		= $_GET['id'];
			$sql	= "select * from santri where id=$ID";
			$result	= mysqli_query($connect,$sql);
			$row	= mysqli_fetch_assoc($result);
		?>
		<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID; ?>"><br>
			<label>
				NAMA :<br>
				<input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
			</label>
			<label>
				E-Mail :<br>
				<input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
			</label>
			<label>
				Password :<br>
				<input type="password" name="password" value="<?php echo $row['passwd']; ?>"><br>
			</label>
			<label>
				Tanggal Lahir :<br>
				<input type="date" name="tgl2lahir" value="<?php echo $row['tgllahir']; ?>"><br>
			</label>
			<input type="submit" value="Kirim">
		</form>
	</body>
</html>
