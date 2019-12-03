<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
    <form action="proses_tambah.php" method="POST">
        
        <label for="nama">Nama :</label>
        <input id="nama" type="text" name="name"><br>
        
        <label>Jenis Kelamin :</label>
        
        <label for="laki">Laki-Laki</label>
        <input id="laki" type="radio" name="gender" value="1">
        
        <label for="pr">Perempuan</label>
        <input type="radio" name="gender" value="0"><br>
        
        <label for="address">Alamat :</label>
        <textarea name="address" id="address"></textarea><br>

        <button type="submit">Kirim</button>

    </form>
</body>
</html>