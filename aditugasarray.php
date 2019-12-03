<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adine | Tugas Array</title>
</head>
<body>

	<h1>Tugas PHP | Array</h1>

	<h4>1. Apa itu PHP Array Multidimension?</h4>
	<p>Array multidimension adalah array yang mengandung array di dalamnya.</p>

	<?php

		// Soal nomor 2

		echo "<h4>2. 2 Contoh Array 2 dimensi</h4>";
		echo "<br>";
		echo "<h5>Contoh 1</h5>";
		echo "<br>";
		$a2d1 = array(
			array("Honda","Yamaha","Suzuki","Kawasaki"),
			array("Bugati","Lamborgini","Ferari","Tosa")
		);
		echo $a2d1[1][2];
		echo "<br><br>";

		echo "<h5>Contoh 2</h5>";
		echo "<br>";
		$a2d1 = array(
			array("Mawar","Melati","Kenanga","Teratai"),
			array("Mangga","Pisang","Jambu","Jeruk")
		);
		echo $a2d1[0][2];

		// Soal nomor 3

		echo "<h4>3.1 3 Contoh Array 3 dimensi</h4>";
		echo "<br>";
		echo "<h5>Contoh 1</h5>";
		echo "<br>";
		$a2d1 = array(
			array("Honda","Yamaha","Suzuki","Kawasaki"),
			array("Bugati","Lamborgini","Ferari","Tosa"),
			array("Becak","Motor","Bajaj","Busway")
		);
		echo $a2d1[2][2];
		echo "<br><br>";

		echo "<h5>Contoh 2</h5>";
		echo "<br>";
		$a2d1 = array(
			array("Honda","Yamaha","Suzuki","Kawasaki"),
			array("Bugati","Lamborgini","Ferari","Tosa"),
			array("Mahoni","Jati","Sengon","Kemuning")
		);
		echo $a2d1[1][3];
		echo "<br><br>";

		echo "<h5>Contoh 3</h5>";
		echo "<br>";
		$a2d1 = array(
			array("Mawar","Melati","Kenanga","Teratai"),
			array("Mangga","Pisang","Jambu","Jeruk"),
			array("Padi","Jagung","Singkong","Sagu")
		);
		echo $a2d1[2][3];
		echo "<br><br>";
		
		echo "<h4>4. 3 Contoh ascending index array</h4>";
		echo "<br>";
		echo "<h5>Contoh 1</h5>";
		$mobil = array("Daihatsu","Mitshubishi","Karimun","VW");
		sort($mobil);
		var_dump($mobil);
		
		echo "<br>";
		echo "<h5>Contoh 2</h5>";
		$motor = array("Kawasaki","Yamaha","Honda","Suzuki");
		sort($motor);
		var_dump($motor);
		
		echo "<br>";
		echo "<h5>Contoh 3</h5>";
		$pesawat = array("Lion","Garuda","AirAsia","FlyEmirate");
		sort($pesawat);
		var_dump($pesawat);
		
		echo "<h4>5. 3 Contoh descending index array</h4>";
		echo "<br>";
		echo "<h5>Contoh 1</h5>";
		$mobil = array("Daihatsu","Mitshubishi","Karimun","VW");
		rsort($mobil);
		var_dump($mobil);
		
		echo "<br>";
		echo "<h5>Contoh 2</h5>";
		$motor = array("Kawasaki","Yamaha","Honda","Suzuki");
		rsort($motor);
		var_dump($motor);
		
		echo "<br>";
		echo "<h5>Contoh 3</h5>";
		$pesawat = array("Lion","Garuda","AirAsia","FlyEmirate");
		rsort($pesawat);
		var_dump($pesawat);
		echo "<br><br>";
		
		echo "<h4>6. 3 Contoh ascending asosiatif array</h4>";
		echo "<br>";
		echo "<h5>Contoh 1</h5>";
		$mobil = array("a" => "Daihatsu","b"=>"Mitshubishi","c"=>"Karimun","f"=>"VW");
		asort($mobil);
		var_dump($mobil);
		
		echo "<br>";
		echo "<h5>Contoh 2</h5>";
		$motor = array("d"=>"Kawasaki","e"=>"Yamaha","g"=>"Honda","h"=>"Suzuki");
		asort($motor);
		var_dump($motor);
		
		echo "<br>";
		echo "<h5>Contoh 3</h5>";
		$pesawat = array("i"=>"Lion","j"=>"Garuda","k"=>"AirAsia","l"=>"FlyEmirate");
		asort($pesawat);
		var_dump($pesawat);
		
		echo "<h4>7. 3 Contoh descending asosiatif array</h4>";
		echo "<br>";
		echo "<h5>Contoh 1</h5>";
		$mobil = array(1=>"Daihatsu",2=>"Mitshubishi",3=>"Karimun",4=>"VW");
		arsort($mobil);
		var_dump($mobil);
		
		echo "<br>";
		echo "<h5>Contoh 2</h5>";
		$motor = array(5=>"Kawasaki",6=>"Yamaha",7=>"Honda",8=>"Suzuki");
		arsort($motor);
		var_dump($motor);
		
		echo "<br>";
		echo "<h5>Contoh 3</h5>";
		$pesawat = array(9=>"Lion",10=>"Garuda",11=>"AirAsia",12=>"FlyEmirate");
		arsort($pesawat);
		var_dump($pesawat);
		echo "<br><br>";
		
		echo "<h4>8. 3 Contoh ascending asosiatif (Key) array</h4>";
		echo "<br>";
		echo "<h5>Contoh 1</h5>";
		$mobil = array("a" => "Daihatsu","b"=>"Mitshubishi","c"=>"Karimun","f"=>"VW");
		ksort($mobil);
		var_dump($mobil);
		
		echo "<br>";
		echo "<h5>Contoh 2</h5>";
		$motor = array("d"=>"Kawasaki","e"=>"Yamaha","g"=>"Honda","h"=>"Suzuki");
		ksort($motor);
		var_dump($motor);
		
		echo "<br>";
		echo "<h5>Contoh 3</h5>";
		$pesawat = array("i"=>"Lion","j"=>"Garuda","k"=>"AirAsia","l"=>"FlyEmirate");
		ksort($pesawat);
		var_dump($pesawat);
		
		echo "<h4>9. 3 Contoh descending asosiatif (Key) array</h4>";
		echo "<br>";
		echo "<h5>Contoh 1</h5>";
		$mobil = array(1=>"Daihatsu",2=>"Mitshubishi",3=>"Karimun",4=>"VW");
		krsort($mobil);
		var_dump($mobil);
		
		echo "<br>";
		echo "<h5>Contoh 2</h5>";
		$motor = array(5=>"Kawasaki",6=>"Yamaha",7=>"Honda",8=>"Suzuki");
		krsort($motor);
		var_dump($motor);
		
		echo "<br>";
		echo "<h5>Contoh 3</h5>";
		$pesawat = array(9=>"Lion",10=>"Garuda",11=>"AirAsia",12=>"FlyEmirate");
		krsort($pesawat);
		var_dump($pesawat);




	?>

	
</body>
</html>
