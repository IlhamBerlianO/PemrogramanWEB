<?php 
    require("koneksi.php");
    $data = mysqli_query($conn, "SELECT * FROM departemen");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Program Departemen</title>
    </head>
    <body>
        <div align="center">
            <h2>Daftar Departemen</h2>
            
            <table border="1px">
                <tr>
                    <th>ID Departemen</th>
                    <th>Nama</th>
                </tr>
                <?php while($row = mysqli_fetch_assoc($data)){ ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['nama']?></td>
                </tr>
                <?php } //End while 
                    mysqli_close($conn); // Menutup koneksi ke database
                ?>
            </table>
            <br>
            <button>
                <a href="pgmPegawai.php">Data Pegawai</a>
            </button>
        </div>
    </body>
</html>