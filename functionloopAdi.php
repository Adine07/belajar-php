<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adine | Tugas</title>
</head>
<body>

	<?php  

		function alpha($nilai,$baris){
			for ($i=0; $i < $baris ; $i++) { 
				for ($u=0; $u <= $i ; $u++) { 
					$nilainya = $nilai + $u;
					if ($nilainya >= 0 and $nilainya < 50) {
						$tampil = "D";
					} elseif ($nilainya >= 50 and $nilainya < 80) {
						$tampil = "C";
					} elseif ($nilainya >= 80 and $nilainya < 90) {
						$tampil = "B";
					} elseif ($nilainya >= 90 and $nilainya < 100) {
						$tampil = "A";
					}
					echo "$nilainya ($tampil) ";
				}
				echo "<br>";
			}
		}

		alpha(50,3);
		echo "<br>";
		alpha(60,5);
		echo "<br>";
		alpha(80,3);
		echo "<br>";

	?>
	
</body>
</html>