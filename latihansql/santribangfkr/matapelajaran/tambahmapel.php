<head>
	<style>
		#konten{
			position:absolute;left:34%;top:60px;
			width:35%;
			
		}
	</style>
</head>
	<?php
	include "../menu.php";
	?>
<body>
	<div id="konten">
	<form method="post" action="prosestambahmapel.php">
		Nama Mapel :<br>
		<input type="text" name="matapelajaran"><br><br>
		<input type="submit" value="tambah">
	</form>
	</div>
</body>
