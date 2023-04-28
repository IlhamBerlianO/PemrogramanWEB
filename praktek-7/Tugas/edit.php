<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Edit Data Pegawai</title>
    </head>
    <body>
        <div align="center">
            <h2>Edit Data Pegawai</h2>
            <form action="functionEdit.php" method="POST">
                <table>
                    <?php
                        require("koneksi.php");
                        $id = $_GET['id'];
                        $sql = "SELECT * FROM pegawai WHERE id=$id";
                        $result = mysqli_query($conn, $sql);
                        $row=mysqli_fetch_row($result);
                        list($id,$nama,$jabatan,$gaji,$departemen_id)=$row;
                    ?>
                    <tr>
                        <td>ID : </td>
                        <td>
                            <input type="text" name="id" value="<?php echo $id?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama : </td>
                        <td>
                            <input type="text" name="nama" value="<?php echo $nama?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Jabatan : </td>
                        <td>
                            <input type="text" name="jabatan" value="<?php echo $jabatan?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Gaji : </td>
                        <td>
                            <input type="number" name="gaji" value="<?php echo $gaji?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Departemen : </td>
                        <td>
                            <input type="number" name="departemen" value="<?php echo $departemen_id?>">
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit" name="simpan" value="Simpan Data" >
                <input type=reset value=Reset>
                <button><a href="pgmPegawai.php" style="text-decoration: none; color: black;">Kembali</a></button>
            </form>
        </div>
    </body>
</html>