<?php
	include "../menu.php";
?>
<head>
	<style>
		body{
			font-family:sans-serif;
		}
		input{
			width:100%;
			height:30px;
		}
		#teng{
			position:absolute; right:40%;top:60px;
		}
	</style>
</head>
<body>
<div id="teng">
	<a href="tambahmapelsantri.php">Tambah mapel santri </a>
	<table border="1" cellpadding="5px">
		<tr>
			<td>No</td>
			<td>Id santri</td>
			<td>Mapel</td>
			<td>Nilai Huruf</td>
			<td>Ninali Anggka</td>
			<td>Action</td>
		</tr>
			<?php
				include "../config/koneksi.php";
				
				$quer="SELECT user.nama, matapelajaran.matapelajaran,mapelsantri.id, mapelsantri.nilai_angka, mapelsantri.nilai_huruf   FROM user JOIN mapelsantri ON user.id = mapelsantri.santri_id JOIN matapelajaran ON mapelsantri.matapelajaran_id=matapelajaran.id ";
				
				$oper=mysqli_query($koneksi,$quer);
				
				$no=1;
				while($data=mysqli_fetch_assoc($oper)){
			?>
		<tr>
			<td><?= $no++ ; ?></td>
			<td><?= $data['nama'];?></td>
			<td><?= $data['matapelajaran'];?></td>
			<td><?= $data['nilai_angka'];?></td>
			<td><?= $data['nilai_huruf'];?></td>
			<td>
			<a href="delete.php?id=<?= $data['id'];?>">Hapus</a>
			<a href="edit.php?id=<?= $data['id'];?>">Edit</a>
			</td>
			
		</tr>
		<?php
			}
		?>
	</table>
</div>
</body>
