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
			width:15%;
			position:absolute; right:40%;top:60px;
		}
	</style>
</head>
<body>
<div id="teng">
	<a href="index.php">Kembali</a><br><br>
	<form method="post" action="prosestambah.php">
		nama :<br><input type="text" name="nama"><br>
		pass :<br><input type="password" name="password"><br>
		email :<br><input type="email" name="email"><br>
		ttl :<br><input type="date" name="ttl"><br>
		<br><input type="submit" name="kirim"><br>
	</form>
</div>
</body>
