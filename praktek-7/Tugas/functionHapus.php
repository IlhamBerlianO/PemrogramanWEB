<?php
    require_once("koneksi.php");

    $id = $_GET['id'];
    $sql = "DELETE FROM pegawai WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: pgmPegawai.php");
    } else {
        echo "Hapus Data Gagal!!!";
    }
?>