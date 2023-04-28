<?php
    include("koneksi.php");
    
    if (isset($_POST['simpan'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];   
        $gaji = $_POST['gaji'];
        $departemen = $_POST['departemen'];

        $sql = "UPDATE pegawai SET nama = '$nama', jabatan = '$jabatan', gaji = '$gaji', departemen_id = '$departemen' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            header("Location: pgmPegawai.php");
        } else {
            echo "Edit Data Gagal!!!";
        }
    }

    mysqli_close($conn);
?>