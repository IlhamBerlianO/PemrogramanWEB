<?php
    include("koneksi.php");
    
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];   
        $gaji = $_POST['gaji'];
        $departemen = $_POST['departemen'];

        $sql = "INSERT INTO pegawai SET nama='$nama', jabatan='$jabatan', gaji='$gaji', departemen_id='$departemen'";
        if (mysqli_query($conn, $sql)) {
            header("Location: pgmPegawai.php");
        } else {
            echo "Tambah Data Gagal!!!";
        }
    }

    mysqli_close($conn);
?>