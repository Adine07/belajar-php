
<head>
</head>
<body>
		<?php
			include "../config/koneksi.php";
			$id=$_GET['id'];
			
			$quer="SELECT id,nama FROM user";
			$oper=mysqli_query($koneksi,$quer); 
		?>
	<form method="POST" action="prosestmps.php">
		<input type="hidden" name="id" value="<?= $id; ?>">
		<select name="namasantri">
		<?php 
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
			<?php
			include "../config/koneksi.php";
			
			$quer2="SELECT * FROM mapelsantri WHERE id='$id'";
			$oper2=mysqli_query($koneksi,$quer2); 
			
			$data=mysqli_fetch_assoc($oper2);
		?>
		<br><br>
		Nilai Angka:
		<input type="number" name="nilai_angka" value="<?php echo $data['nilai_angka'];?>"><br><br>
		<input type="submit" value="tambah">			
	</form>
</body>	


