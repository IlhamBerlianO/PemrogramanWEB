<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Biodata </title>
    </head>
    <body>
        <h1 align="center"> Biodata Anda</h1>
        <?php
            echo "
                Nama : ".$_POST['nama']."
                <br>
                Alamat : ".$_POST['alamat']."
                <br>
            ";
            if (isset($_POST["Proses"])) {
                echo "Jenis Kelamin : ".$_POST['jenis_kelamin']." <br> ";
            }
            if (isset($_POST["Proses"])) {
                echo "Status : ".$_POST['status']." <br> ";
            }
            echo "Agama : ".$_POST['agama']." <br>";
            if (isset($_POST["Proses"])) {
                echo "Riwayat Pendidikan : ".$_POST['RP']." <br> ";
            }
            echo "Hobby : ".$_POST['hobby']." <br>";
            echo "Tanggal Lahir : ".$_POST['tanggal']." <br>";
        ?>
        <br>
        <button type="button">
            <a href="3inputBiodata.php" style="text-decoration:none; color:black; font-weight:bold">Isi Lagi</a>
        </button>
    </body>
</html>