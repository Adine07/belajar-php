<html>
	<head>
		<title>Adine | Array</title>
	</head>
	<body>
	

		<h1>Tugas PHP</h1>

		<h4>1. Pengertian Array PHP</h4>
		<p>Array adalah sebuah Variabel yang memiliki banyak(lebih dari satu) data/nilai yang berada di dalamnya.</p><br><br>


		<h4>2. Pengertian Array Indexed dan Asosiatif</h4>
		<p>Indexed pada array adalah suatu pengIdentitassan atau penandaan atau pemberian id kepada data/nilai yang terdapat pada array.<br>jika data/nilainya tidak di berikan identitas secara manual oleh programmernya maka data/nilai akan diberikan id secara otomatis(urut dari 0-seterusnya) oleh phpnya. </p>

		<p>Dan, Array asosiatif adalah array yang Nilai/datanya telah di berikan identitas secara manual oleh programmer pada scriptnya</p><br>

		<?php

		echo "<h4>3. Buat Contoh Array Indexed</h4>";
		$adi = array('hai', 13, 'kamu?');
		echo $adi[1];
		echo "<br>";

		$ne = array('apa', 8, 'kabar?');
		echo $ne[1];
		echo "<br>";

		$pamung = array('kok', 00, 'diem-diem baek?');
		echo $pamung[1];

		?>

		<?php

		echo "<h4>4. Buat Contoh Array Asosiatif</h4>";
		$d = array('satu' =>'satu','dua' => 7,'tiga' => 'tiga?');
		echo $d['satu'];
		echo "<br>";

		$i = array('a' => 'apa','b' => 4,'c' => 'kabar?');
		echo $i['b'];
		echo "<br>";

		$i = array('aa' => 'apakah','bb' => 45,'cc' => 'kabarnya?');
		echo $i['aa'];
		echo "<br>";

		$a = array('one' =>'kok','tu' => 00,'tri' => 'diem-diem baek?');
		echo $pamung[1];

		?>



		
	</body>
</html>
