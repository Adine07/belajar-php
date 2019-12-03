<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Santri</title>
</head>
<body>
    <a href="tambah.php">Tambah Data</a>

    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
        </tr>
        <?php
            include 'koneksi.php';
            $nomor = 1;
            $sql = "SELECT * FROM santri";
            $result = mysqli_query($konek,$sql);

            if (mysqli_num_rows($result)){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                        <tr>
                            <td>".$nomor++."</td>
                            <td>".$row['name']."</td>
                            <td>".(($row['gender'])?'laki-laki':'perempuan')."</td>
                            <td>".$row['address']."</td>
                        </tr>
                    ";
                }
            }
        ?>
    </table>

</body>
</html>