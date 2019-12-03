<html>
	<head>
		<title>Santri | PondokIT</title>
	</head>
	<body>
	<?php include '../menu.php';
	?><br>
	
		<a href="tambah.php">Tambah Data</a><br><br>
		
		<table border="1" cellpadding="10">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Matapelajaran</th>
				<th>Nilai</th>
				<th>kriteria</th>
				<th>Action</th>
			</tr>
			<?php
				include '../koneksi.php';
				$no =1;
				$sql = "SELECT mapel.namamapel, mapelsantri.id, mapelsantri.nilaiangka, mapelsantri.nilaihuruf, santri.nama, mapelsantri.idmapel FROM mapelsantri JOIN mapel ON mapelsantri.idmapel = mapel.id JOIN santri ON mapelsantri.idsantri = santri.id";
				$result = mysqli_query($connect, $sql);
				if (mysqli_num_rows($result)>0) {
					while ($row = mysqli_fetch_assoc($result)) {
						echo "
							<tr>
								<td>".$no++."</td>
								<td>".$row['nama']."</td>
								<td>".$row['namamapel']."</td>
								<td>".$row['nilaiangka']."</td>
								<td>".$row['nilaihuruf']."</td>
								<td>
									<a href='edit.php?id=".$row['id']."'>edit</a>
									<a href='delete.php?id=".$row['id']."'>delete</a>
								</td>
							</tr>
						";
					}
				}		
			?>
		</table>
	
	</body>
</html>
