<html>
	<head>
		<title>Create New User</title>
	</head>
	<body>
		<?php include '../koneksi.php'?>
		<form action="proses_tambah.php" method="POST">
			<label>
				NAMA :<br>
				<select name="santri">
					<?php
						$sql = "SELECT id,nama FROM santri";
						$result = mysqli_query($connect,$sql);
						while($row = mysqli_fetch_assoc($result)){
					?>
					<option value="<?php echo $row['id']; ?>">
					<?php echo $row['nama']; ?>
					</option>
					<?php } ?>
				</select>
			</label><br>
			<label>
				MAPEL :<br>
				<select name="idmapel">
					<?php
						$sql2 = "SELECT id,namamapel FROM mapel";
						$result2 = mysqli_query($connect,$sql2);
						while($rows = mysqli_fetch_assoc($result2)){
					?>
					<option value="<?php echo $rows['id']; ?>">
						<?php echo $rows['namamapel']; ?>
					</option>
					<?php } ?>
				</select>
			</label><br>
			<label>
				NILAI :<br>
				<input type="number" name="nilaiangka">
			</label>
			<input type="submit" value="Kirim">
		</form>
	</body>
</html>
