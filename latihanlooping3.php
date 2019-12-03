<html>
    <head>
        <title>Adine Latihan</title>
    </head>
    <body>

    <?php 
        function ulang($nilai1, $nilai2){
            for ($a=0; $a < $nilai2 ; $a++) { 
		        for ($b=0; $b <= $a ; $b++) { 
			        echo $nilai1 + $b;
		        }
		        echo "<br>";
	        }
        }

        ulang(4,6);
        echo"<br>";

        ulang(2,3);
        echo"<br>";

        ulang(6,9);
        echo"<br>";

        ulang(6,2);
        echo"<br>";



    ?>


    </body>
</html>
