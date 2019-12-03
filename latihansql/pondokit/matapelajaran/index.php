<html>
	<head>
		<title>MAPEL | PondokIT</title>
	</head>
	<body>
	
		<a href="tambah.php">Tambah Data</a><br><br>
		
		<table border="1" cellpadding="10">
			<tr>
				<th>No</th>
				<th>MATAPELAJARAN</th>
				<th>Action</th>
			</tr>
			<?php
				include '../koneksi.php';
				$nomor		= 1;
				$sql		= "select * from mapel";
				$result		= mysqli_query($connect,$sql);
				if(mysqli_num_rows($result)){
					while ($row = mysqli_fetch_assoc($result)){
						echo "
						<tr>
							<td>". $nomor++ ."</td>
							<td>". $row['namamapel'] ."</td>
							<td>
								<a href='edit.php?id=".$row['id']."'>Edit</a>
								<a href='delete.php?id=".$row['id']."' onclick='javascript:return confirm(\"Apakah Anda Yakin Untuk Menghapus Data ini?\")'>Hapus</a>
							</td>
						</tr>
						";
					}
				}			
			?>
		</table>
	
	</body>
</html>
