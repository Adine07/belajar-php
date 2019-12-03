
<head>
</head>
<body>
	<form method="POST" action="prosestmps.php">
		<select name="namasantri">
		<?php
			include "../config/koneksi.php";
			
			$quer="SELECT id,nama FROM user";
			$oper=mysqli_query($koneksi,$quer); 
			
			$no=1;
			while($data=mysqli_fetch_assoc($oper)){
		?>
			<option   value="<?php echo $data['id'];?>"><?php echo $data['nama'];?></option>
		<?php
		}
		?>
		</select><br><br>
		<select name="namamapel">
		<?php
			include "../config/koneksi.php";
			
			$quer1="SELECT * FROM matapelajaran";
			$oper1=mysqli_query($koneksi,$quer1); 
			
			$no=1;
			while($data=mysqli_fetch_assoc($oper1)){
		?>
			<option  value="<?php echo $data['id'];?>"><?php echo $data['matapelajaran'];?></option>
			<?php
			}
			?>
		</select>
		
		<br><br>
		Nilai Angka:
		<input type="number" name="nilai_angka"><br><br>
		<input type="submit" value="tambah">			
	</form>
</body>	

