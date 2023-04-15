<?php
    include "4Inc.php";
    echo $angka;
    echo "<br>";
    if ($angka==100) {
        echo "Memuaskan!";
    } elseif ($angka<100 && $angka >=85) {
        echo "Sangat Baik!";
    } elseif ($angka<85 && $angka>=75) {
        echo "Baik!";
    } elseif ($angka<75 && $angka>=55) {
        echo "Cukup!";
    } elseif ($angka<55 && $angka>=0) {
        echo "Kurang!";
    }
?>