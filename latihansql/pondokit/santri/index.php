<html>
	<head>
		<title>Santri | PondokIT</title>
	</head>
	<body>
	<?php include '../menu.php'?>
	
		<a href="tambah.php">Tambah Data</a><br><br>
		
		<table border="1" cellpadding="10">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>E-mail</th>
				<th>Tanggal Lahir</th>
				<th>Action</th>
			</tr>
			<?php
				include '../koneksi.php';
				$nomor		= 1;
				$sql		= "select * from santri";
				$result		= mysqli_query($connect,$sql);
				if(mysqli_num_rows($result)){
					while ($row = mysqli_fetch_assoc($result)){
						echo "
						<tr>
							<td>". $nomor++ ."</td>
							<td>". $row['nama'] ."</td>
							<td>". $row['email'] ."</td>
							<td>". $row['tgllahir'] ."</td>
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
