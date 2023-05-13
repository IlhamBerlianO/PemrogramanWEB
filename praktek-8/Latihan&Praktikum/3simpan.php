<?php
    include 'koneksi.php';

    // Menyimpan data kedalam variabel terlebih dahulu
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $pesan = $_POST['pesan'];

    // Query SQL untuk insert data ke tabel
    $query = "INSERT INTO kontak SET nama='$nama', jkel='$jenis_kelamin', email='$email', alamat='$alamat', kota='$kota', pesan='$pesan'";
    mysqli_query($koneksi, $query);

    // Mengalihkan ke halaman form-input.php
    header("location:3tampilkontak.php");
?>