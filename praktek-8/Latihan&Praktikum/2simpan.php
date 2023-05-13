<?php
    include 'koneksi.php';

    // Menyimpan data kedalam variabel terlebih dahulu
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    // Query SQL untuk insert data ke tabel
    $query = "INSERT INTO mahasiswa SET npm='$npm', nama='$nama', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin', alamat='$alamat'";
    mysqli_query($koneksi, $query);

    // Mengalihkan ke halaman form-input.php
    header("location:2form-input.php");
?>