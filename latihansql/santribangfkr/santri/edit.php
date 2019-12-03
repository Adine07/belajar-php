<?php
	include "../config/koneksi.php";
	include "../menu.php";

	$id=$_GET['id'];
	
	$quer="SELECT * FROM user WHERE id='$id'";
	$oper=mysqli_query($koneksi,$quer);
	$data=mysqli_fetch_assoc($oper);

?>
<head>
	<style>
		body{
			font-family:sans-serif;
		}
		#teng input{
			width:100%;
			height:30px;
		}
		#teng{
			width:15%;
			position:absolute; right:40%;top:60px;
		}
	</style>
</head>
<body>
<div id="teng">
<a href="index.php">Kembali</a><br><br>
<form method="post" action="prosesedit.php">
		<input type="hidden" name="id" value="<?= $data['id'];?>">
	    nama :<br><input type="text" name="nama" value="<?= $data['nama'];?>"><br>
		pass :<br><input type="password" name="password" value="<?= $data['password'];?>"><br>
		email :<br><input type="email" name="email" value="<?= $data['email'];?>"><br>
		ttl :<br><input type="date" name="ttl" value="<?= $data['ttl'];?>"><br>
		<br><input type="submit" value="simpan"><br>
</form>
</div>
</body>
