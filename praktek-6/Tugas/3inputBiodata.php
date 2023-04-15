<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Biodata </title>
    </head>
    <body>
        <center>
            <h1> Input Data Anda </h1>
            <form action="3biodata.php" method="POST">
                <table width="400" align="center" cellpadding="2" cellspacing="2">
                    <tr>
                        <td> Nama </td>
                        <td>
                            <input type="text" name="nama">
                        </td>
                    </tr>
                    <tr>
                        <td> Alamat </td>
                        <td>
                            <input type="text" name="alamat">
                        </td>
                    </tr>
                    <tr>
                        <td> Jenis Kelamin </td>
                        <td>
                            <input type="radio" name="jenis_kelamin" value="Laki - Laki"> Laki - Laki
                            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td> Status </td>
                        <td>
                            <input type="radio" name="status" value="Menikah"> Menikah
                            <input type="radio" name="status" value="BelumMenikah"> Belum Menikah
                        </td>
                    </tr>
                    <tr>
                        <td> Agama </td>
                        <td>   
                            <input type="text" name="agama">
                        </td>
                    </tr>
                    <tr>
                        <td> Riwayat Pendidikan </td>
                        <td>
                            <select name="RP">
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA/SMK">SMA/SMK</option>
                                <option value="S1">S1</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td> Hobby </td>
                        <td>   
                            <input type="text" name="hobby">
                        </td>
                    </tr>
                    <tr>
                        <td> Tanggal Lahir </td>
                        <td>
                            <input type=date name=tanggal>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Proses" name="Proses">
                            <input type="reset" value="Reset" name="Reset">
                        </td>
                    </tr>
                </table>
            </form>
        </center>
    </body>
</html>