<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Tambah Data Pegawai</title>
    </head>
    <body>
        <div align="center">
            <h2>Tambah Data Pegawai</h2>
            <form action="functionTambah.php" method="POST">
                <table>
                    <tr>
                        <td>Nama : </td>
                        <td>
                            <input type="text" name="nama">
                        </td>
                    </tr>
                    <tr>
                        <td>Jabatan : </td>
                        <td>
                            <input type="text" name="jabatan">
                        </td>
                    </tr>
                    <tr>
                        <td>Gaji : </td>
                        <td>
                            <input type="number" name="gaji">
                        </td>
                    </tr>
                    <tr>
                        <td>Departemen : </td>
                        <td>
                            <input type="number" name="departemen">
                        </td>
                    </tr>
                </table>
                <br>
                <input type="submit" name="submit" value="Tambah Data">
            </form>
        </div>
    </body>
</html>