<html>
<head>
	<title>Adine | Tugas PHP</title>
</head>
<body>
	<?php

	// 1. Buat 2 contoh variabel

	$contoh1 = "Ini Isi Variabel"; //Contoh Variabel dengan isi bertype data "String"
	echo $contoh1;
	echo "<br>";
	$contoh2 = 1234; // Contoh Variabel dengan isi bertipe data "Integer"
	echo $contoh2;
	echo "<br>";

	// 2. Buatlah masing-masing 5 contoh dari function strlen, strrev, dkk:

	echo strlen("string 1"); // contoh strlen 1
	echo "<br>";
	echo strlen("string 2"); // contoh strlen 2
	echo "<br>";
	echo strlen("string 3"); // contoh strlen 3
	echo "<br>";
	echo strlen("string 4"); // contoh strlen 4
	echo "<br>";
	echo strlen("string 5"); // contoh strlen 5
	echo "<br>";

	echo str_word_count("string contoh 1"); // contoh str_word_count 1
	echo "<br>";
	echo str_word_count("string contoh 2"); // contoh str_word_count 2
	echo "<br>";
	echo str_word_count("string contoh 3"); // contoh str_word_count 3
	echo "<br>";
	echo str_word_count("string contoh 4"); // contoh str_word_count 4
	echo "<br>";
	echo str_word_count("string contoh 5"); // contoh str_word_count 5
	echo "<br>";

	echo strrev("string1"); // contoh strrev 1
	echo "<br>";
	echo strrev("string2"); // contoh strrev 2
	echo "<br>";
	echo strrev("string3"); // contoh strrev 3
	echo "<br>";
	echo strrev("string4"); // contoh strrev 4
	echo "<br>";
	echo strrev("string5"); // contoh strrev 5
	echo "<br>";

	echo strpos("hello world1", "world1"); // contoh strpos 1
	echo "<br>";
	echo strpos("hello world23", "world2"); // contoh strpos 2
	echo "<br>";
	echo strpos("hello world3!", "world3"); // contoh strpos 3
	echo "<br>";
	echo strpos("hello world4!", "world4"); // contoh strpos 4
	echo "<br>";
	echo strpos("hello world5!", "world5"); // contoh strpos 5
	echo "<br>";

	echo str_replace("world", "bambang1", "Hello world"); // contoh str_replace 1
	echo "<br>";
	echo str_replace("world", "bambang2", "Hello world"); // contoh str_replace 2
	echo "<br>";
	echo str_replace("world", "bambang3", "Hello world"); // contoh str_replace 3
	echo "<br>";
	echo str_replace("world", "bambang4", "Hello world"); // contoh str_replace 4
	echo "<br>";
	echo str_replace("world", "bambang5", "Hello world"); // contoh str_replace 5
	echo "<br>";

	// 3. Buatkan 2 contoh aritmatika operator, comparasi, increment, decrement, dll

	$a = 10;
	$b = 5;

	// Aritmatika 
	echo $a - $b; //contoh 1
	echo "<br>";

	echo $a + $b;
	echo "<br>";

	// Assignment

	$a += 100;
	echo $a;
	echo "<br>";

	$b -= 100;
	echo $a;
	echo "<br>";

	// Comparasion
	var_dump($a == $b);
	echo "<br>";

	var_dump($a != $b);
	echo "<br>";

	// Increment & Decrement
	echo ++$a;
	echo "<br>";
	echo $a++;
	echo "<br>";
	echo --$b;
	echo "<br>";
	echo $b--;
	echo "<br>";

	// Gerbang Logika
	$x = 10;
	$y = 5;

	if ($x == 10 and $y == 5) {
		echo "iya";
	}


	echo "<br>";
	if ($x == 10 or $y == 5) {
		echo "tidak";
	}
	echo "<br>";


	if ($x == 10 && $y == 5) {
		echo "iya";
	}


	echo "<br>";
	if ($x == 10 || $y == 5) {
		echo "tidak";
	}
	echo "<br>";

	// PHP String Operator

	$string1 = "Hello";
	$string2 = "world!";
	
	echo $string1 . $string2;
	echo "<br>";
	echo $string2 . $string1;
	echo "<br>";

	// PHP Array Operator

	$o = array("c" => "red", "d" => "green");
	$p = array("e" => "blue", "f" => "yellow");

	var_dump($o === $p);

	echo "<br>";

	var_dump($o <> $p);
	

	?>
</body>
</html>
