<?php
	include "../menu.php";
?>
<head>
<style>
	#konten{
		position:absolute;left:34%;top:60px;
		width:35%;
		
	}
</style>
</head>
<body>
<div id="konten">
<table border="1" cellpadding="5px">
	<a href="tambahmapel.php">Tambah mapel</a>
	<tr>
		<td>No</td>
		<td>mapel</td>
		<td>Aksi</td>
	</tr>
<?php
	include "../config/koneksi.php";
	
	$quer="SELECT * FROM matapelajaran";
	$oper=mysqli_query($koneksi,$quer);
	$no=1;
	while($data=mysqli_fetch_assoc($oper)){
?>
	<tr>
		<td><?= $no++;?></td>
		<td><?= $data['matapelajaran']?></td>
		<td>
			<a href="hapusmapel.php?id=<?=$data['id'];?>">Hapus Mapel</a>
			<br>
			<a href="editmapel.php?id=<?=$data['id'];?>">Edit mape</a>
		</td>
	</tr>
	<?php
		}
	?>
</table>
</div>
</body>



