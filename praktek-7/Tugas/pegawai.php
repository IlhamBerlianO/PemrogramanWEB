<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_Pegawai";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connnect to MySQL : " . mysqli_connect_errno();
        exit();
    }

    // Create Database
    // $sql = "CREATE DATABASE db_Pegawai";

    // Create table pegawai
    // $sql = "CREATE TABLE pegawai (
    //     id INT PRIMARY KEY AUTO_INCREMENT,
    //     nama VARCHAR(50),
    //     jabatan VARCHAR(50),
    //     gaji INT,
    //     departemen_id INT
    //     )";

    // Create table departemen
    // $sql = "CREATE TABLE departemen (
    //     id INT PRIMARY KEY AUTO_INCREMENT,
    //     nama VARCHAR(50)
    //     )";

    // Create connection TBL_PEGAWAI to TBL_DEPARTEMEN
    // $sql = "ALTER TABLE pegawai
    //     ADD CONSTRAINT fk_departemen
    //     FOREIGN KEY (departemen_id)
    //     REFERENCES departemen(id);";

    // Mengisi data untuk contoh
    // $sql = "INSERT INTO departemen (id, nama) VALUES ('', 'Gresik')";
    $sql = "INSERT INTO pegawai (id, nama, jabatan, gaji, departemen_id) VALUES ('', 'Ilham Berlian Oktavio', 'Manager', 6000000, 1)";

    // Check create DataBase / Table / Relasasi / Insert
    if (mysqli_query($conn, $sql)) {
        // echo "Database created succesfully";
        // echo "Table departemen created succesfully";
        // echo "Koneksi succesfully";
        echo "Tambah data succesfully";
    } else {
        // echo "Error creating database : " . mysqli_error($conn);
        // echo "Error creating table : " . mysqli_error($conn);
        // echo "Error koneksi table : " . mysqli_error($conn);
        echo "Error tambah data : " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>