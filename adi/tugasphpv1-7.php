<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adine | PHP v1.7</title>
</head>
<body>

	<?php 

	for ($a=0; $a <= 5 ; $a++) { 
		for ($b=0; $b < $a ; $b++) { 
			echo "*";
		}
		echo "<br>";
	}

	echo "<br>";

	for ($a=0; $a <= 5 ; $a++) { 
		for ($b=5; $b >= $a ; $b--) { 
			echo "*";
		}
		echo "<br>";
	}

	echo "<br>";

	for ($a=1; $a <= 5 ; $a++) { 
		for ($b=1; $b <= $a ; $b++) { 
			echo $b;
		}
		echo "<br>";
	}

	echo "<br>";

	for ($a=5; $a >= 1 ; $a--) { 
		for ($b=1; $b <= $a ; $b++) { 
			echo $b;
		}
		echo "<br>";
	}



	?>
	
</body>
</html>