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
    // $sql = "CREATE TABLE liga (
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     kode VARCHAR(3) NOT NULL,
    //     negara VARCHAR(30) NOT NULL,
    //     champion int(3)
    //     )";

    // Insert data
    // $sql = "INSERT INTO liga (kode, negara, champion) VALUES ('Eng', 'English', '3')";

    // Akses data
    $sql = "SELECT kode, negara, champion FROM liga";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Hasil atau output of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Kode : " . $row["kode"] . " - Negara : " . $row["negara"] . " " . $row["champion"]. "<br>";
        }
    } else {
        echo "0 Results";
    }

    mysqli_close($conn);
?>