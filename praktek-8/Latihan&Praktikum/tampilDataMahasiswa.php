<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>List Mahasiswa</h2>

    <table border=1>
        <tr>
            <th>NO</th>
            <th>NPM</th>
            <th>NAMA</th>
            <th>GENDER</th>
            <th>JURUSAN</th>
            <?php
                include 'koneksi.php';
                $mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                $no=1;
                foreach ($mahasiswa as $row) {
                    $jenis_kelamin = $row['jenis_kelamin']=='P'?'Perempuan':'Laki-Laki';
                    echo "<tr>
                            <td>$no</td>
                            <td>".$row['npm']."</td>
                            <td>".$row['nama']."</td>
                            <td>".$jenis_kelamin."</td>
                            <td>".$row['jurusan']."</td>
                        </tr>";
                    $no++;
                }
            ?>
        </tr>
    </table>
</body>
</html>