<html>
    <head>
        <title>Adine | Kondisi</title>
    </head>
    <body>
  
        <form action="" method="post">
            <label>
            Masukkan Nilai Siswa: <input type="number" name="nilai" value="<?php echo isset($_POST['nilai'])? $_POST['nilai']:""; ?>" >               
            </label>
            <button type="submit" name="tombol1">Submit</button>

        <?php
        
            $nilai = isset($_POST['nilai'])? $_POST['nilai']:"";
            $nilai = (int)$nilai;
            
            switch ( $nilai ) {
                case 0:
                    echo "Nilai kamu:0, Kamu Ngga ngarap atau ngga niat nggarap?.";
                    break;
                case $nilai >0 and $nilai <=55:
                    echo "Nilai kamu:E, kau GAGAL.";
                    break;
                case $nilai >= 56 && $nilai  <= 65:
                    echo "Nilai kamu:D, Makana belajar bukan malah ngewibu.";
                    break;
                case $nilai >= 66 && $nilai <= 75:
                    echo "Nilai kamu:C, Mayanlah nyampe KKM.";
                    break;
                case $nilai >= 76 && $nilai <= 85:
                    echo "Nilai kamu:B, Bagus Tingkatkan Lagi.";
                    break;
                case $nilai >= 86 && $nilai <= 99:
                    echo "Nilai kamu:A, Mantab Bro.";
                    break;
                case 100:
                    echo "Nilai kamu:S, Weeehh Mantul gan, Nilai sempurna.";
                    break;
                default:
                    echo "Kamu Ngga Nggarap";
                }

        ?>

        <?php 
            switch ($x) {
                case $x >= 90 && $x <= 100 :
                    echo "Nilai Kamu A";
                    break;
                case $x >= 70 && $x <= 89 :
                    echo "Nilai Kamu B";
                    break;
                case $x >= 50 && $x <= 69 :
                    echo "Nilai Kamu C";
                    break;
                case $x >= 30 && $x <= 49 :
                    echo "Nilai Kamu D";
                    break;
                case $x >= 0 && $x <= 29 :
                    echo "Nilai Kamu E";
                    break;
                default:
                    echo "Masukkan Nilai";
                    break;
            }
         ?>
        

    <body>
</html>
