<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connnect to MySQL : " . mysqli_connect_errno();
        exit();
    }

    // Create table
    $sql = "CREATE TABLE buku_tamu (
        ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        NAMA VARCHAR(200) NOT NULL,
        EMAIL VARCHAR(50) NOT NULL,
        ISI TEXT
        )";

    if (mysqli_query($conn, $sql)) {
        echo "Table created succesfully";
    } else {
        echo "Error creating table : " . mysqli_error($conn);
    }

    mysqli_close($conn);
?>