<?php
    include "2login.php";
    if (empty($_POST['nama'])) {
        header("Location:2kosong.php");
    } elseif (empty($_POST['email'])) {
        header("Location:2kosong1.php");
    } else {
        echo "<center> 
            Nama : ".$_POST['nama']."
        </center> <br>";
        echo "<center> 
            Email : ".$_POST['email']."
        </center> <br>";
        echo "<center> Waktu login : ".date('l, d-m-Y. H:i:s a')."<center>";
    }
?>