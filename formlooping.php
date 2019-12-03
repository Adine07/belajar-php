    <form method="post">
        <label>
            Masukkan Nilai :
            <input type="text" name="nilai">
        </label>
        <label>
            Masukkan Nilai :
            <input type="text" name="nilai2">
        </label>
        <input type="submit">
    </form>

<?php 

    

    $nilai = isset($_POST['nilai'])? $_POST['nilai']: null;

    for ($a=0; $a <= 5 ; $a++) { 
		for ($b=0; $b < $a ; $b++) { 
			echo $nilai;
		}
		echo "<br>";
	}

    echo "===============================================";

    $nilai2 = isset($_POST['nilai2'])? $_POST['nilai2']: null;

    for ($a=0; $a <= 5 ; $a++) { 
		for ($b=0; $b < $a ; $b++) {
            $nilai2++; 
			echo $nilai2. " ";
		}
		echo "<br>";
	}


?>
