<html>
    <head>
        <title>Adine &&&</title>
    </head>
    <body>

        <table>
            <tr>
                <td>Nomor</td>
                <td>Nama</td>
                <td>Alamat</td>
                <td>Umur</td>
            </tr>
                <?php
                    include 'koneksi.php';
                    $sql    = "SELECT * FROM siswa";
                    $result = mysqli_query($con, $sql);
                    if (mysqli_num_rows($result)>0){
                        while ($row = mysqli_fetch_assoc($result)){
                            echo "
                                <tr>
                                    <td>". $row['id'] ."</td>
                                    <td>". $row['name'] ."</td>
                                    <td>". $row['address'] ."  </td>
                                    <td>". $row['age'] ."</td>
                                </tr>
                            ";
                        }
                    }
                ?>
        </table>

    </body>
</html>

