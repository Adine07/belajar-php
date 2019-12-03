
<?php
	include "../config/koneksi.php";
	include "../menu.php";
	
	$id=$_GET['id'];
	$oper="SELECT * FROM matapelajaran WHERE id='$id'";
	$oper=mysqli_query($koneksi,$oper);
	$data=mysqli_fetch_assoc($oper);
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
<form method="POST" action="prosesedit.php">
	<input type="hidden" name="id" value="<?= $data['id']; ?>">
	Mapel:<br><input type="text" name="matapelajaran" value="<?= $data['matapelajaran'];?>">
	<br><br>
	<input type="submit" value="update">
</form>
</div>
</body>
