<?php 
    require("koneksi.php");
    $data = mysqli_query($conn, "SELECT * FROM pegawai");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Program Pegawai</title>
    </head>
    <body>
        <div align="center">
            <h2>Daftar Pegawai</h2>
            
            <table border="1px">
                <tr>
                    <th>ID Pegawai</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Gaji</th>
                    <th>ID Departemen</th>
                    <th>Aksi</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($data)){ ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['nama']?></td>
                    <td><?php echo $row['jabatan']?></td>
                    <td><?php echo $row['gaji']?></td>
                    <td><?php echo $row['departemen_id']?></td>
                    <td>
                        <button>
                            <a style="text-decoration: none; color: black;" href="edit.php?id=<?php echo $row['id']?>">Edit Data</a>
                        </button>
                        <button>
                            <a style="text-decoration: none; color: black;" href="functionHapus.php?id=<?php echo $row['id']?>">Hapus Data</a>
                        </button>
                    </td>
                </tr>
                <?php } //End while 
                    mysqli_close($conn); // Menutup koneksi ke database
                ?>
            </table>
            <br>
            <button>
                <a href="tambah.php">Tambah Data</a>
            </button>
            <button>
                <a href="pgmDepartemen.php">Data Departemen</a>
            </button>
        </div>
    </body>
</html>