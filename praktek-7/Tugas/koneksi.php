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
?>