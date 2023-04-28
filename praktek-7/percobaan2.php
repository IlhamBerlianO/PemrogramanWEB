<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password);

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connnect to MySQL : " . mysqli_connect_errno();
        exit();
    }

    // Create database
    $sql = "CREATE DATABASE myDB";
    if (mysqli_query($conn, $sql)) {
        echo "Database created succesfully";
    } else {
        echo "Error creating database : " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>