<html>
<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<style>
			body{
				font-family:sans-serif;
			}
			table{
				width:70%;
				position:absolute;left:25%;top:28%;
				border-collapse:collapse;
			}
			td, th{
				padding:7px;
				text-align:center;
			}
			th{
				background-color:black;
				color:white;
			}
			tr:nth-child(even){
				background-color:mediumseagreen;
				color:white;
			}
			tr a{
				text-decoration:none;
				color:black;
				text-align:center;
			}
			#action{
				text-align:center;
			}
			#tambah{
				text-align:left;
			}
			#kon1{
				background:black;
				height:80px;width:20%;
				position:absolute;top:12%;
				left:25%;border-radius:10px;
				text-align:center;color:white;padding:10px;
			}
			#kon2{
				background:#35b2e8;
				height:80px;width:20%;
				position:absolute;top:12%;
				left:50%;border-radius:10px;text-align:center;color:black;padding:10px;
			}
			#kon3{
				background:#fad900;
				height:100px;width:20%;
				position:absolute;top:12%;
				left:75%;border-radius:10px;
			}
	</style>
</head>
<body>
	<?php
			include "../config/koneksi.php";
			include "../menu.php";
			
			$quer="SELECT * FROM user";
			$quer1="SELECT * FROM matapelajaran";
			$oper=mysqli_query($koneksi,$quer);
			$oper1=mysqli_query($koneksi,$quer1);
			$jum=mysqli_num_rows($oper);
			$jum1=mysqli_num_rows($oper1);
	?>
	<div id="kon1">
		<b>JUMLAH SANTRI</b><hr><b style="font-size:28pt;"><?=$jum;?></b>
	</div>
	<div id="kon2">
		<b>JUMLAH MAPEL</b><hr><b style="font-size:28pt;"><?=$jum1;?></b>
	</div>
	<div id="kon3">
	</div>
	<table >
		<tr>
			<td colspan="6" id="tambah"><a href="tambahdata.php"><i class="material-icons">add_box</i></a></td>
		</tr>
		<tr>
			<th>No</th>
			<th>Nama</h>
			<th>Password</th>
			<th>email</th>
			<th>ttl</th>
			<th>Action</th>
		</tr>
		<?php
			$i=1;
			while($data=mysqli_fetch_assoc($oper)){
		?>
		<tr>
			<td><?= $i++ ;?></td>
			<td><?=  $data['nama'];?></d>
			<td><?=  $data['password'] ;?></td>
			<td><?=  $data['email'] ;?></td>
			<td><?=  $data['ttl'] ;?></td>
			<td id="action">
				<a href="hapus.php?id=<?= $data['id']; ?>"><i class="material-icons">delete</i></a> 
				<a href="edit.php?id=<?= $data['id']; ?>"><i class="material-icons">build</i></a>
			</td>
		</tr>
		<?php
		}
		?>
	</table>
</body>
</html>



