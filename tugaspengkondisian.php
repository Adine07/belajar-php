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
        
            if ((isset($_POST["nilai"]))== null){
                echo "Nilai Akan muncul disini";
            } elseif (isset($_POST["nilai"])){
                $nilai = $_POST["nilai"];
            
                if ($nilai == 0) {
                    echo "Nilai kamu:0, Kamu Ngga ngarap atau ngga niat nggarap?.";
                } elseif ($nilai <= 55 && $nilai >= 0){
                    echo "Nilai kamu:E, kau GAGAL.";
                } elseif ($nilai <= 65 && $nilai >= 56){
                    echo "Nilai kamu:D, Makana belajar bukan malah ngewibu.";
                } elseif ($nilai <= 75 && $nilai >= 66){
                    echo "Nilai kamu:C, Mayanlah nyampe KKM.";
                } elseif ($nilai <= 85 && $nilai >= 76){
                    echo "Nilai kamu:B, Bagus Tingkatkan Lagi.";
                } elseif($nilai <= 99 && $nilai >= 86){
                    echo "Nilai kamu:A, Mantab Bro.";
                } elseif($nilai == 100){
                    echo "Nilai kamu:S, Weeehh Mantul gan, Nilai sempurna.";
                }else{
                    echo "Kamu Ngga Nggarap";
                }
            }
        ?>
        <br>
        <hr>
        <br>
        
            <input type="number" name="nilai1" placeholder="Masukkan angka pertama" value="<?php echo isset($_POST['nilai1'])? $_POST['nilai1']: ""; ?>" >
            +
            <input type="number" name="nilai2" placeholder="Masukkan angka kedua" value="<?php echo isset($_POST['nilai2'])? $_POST['nilai2']: ""; ?>" >
            <button type="submit" name="tombol2">Submit</button>
        </form>
        
        <?php
            
            if (isset($_POST["nilai1"])&&$_POST["nilai2"]){
                echo '<strong>" '. (int)$_POST["nilai1"]. ' + '. (int)$_POST["nilai2"]. ' = '. ((int)$_POST["nilai1"] + (int)$_POST["nilai2"]).' "</strong>';
            }
        ?>



        

    <body>
</html>
