<?php
    include "1login.php";
    echo "<center> 
        Nama : ".$_POST['nama']."
    </center> <br>";
    echo "<center> 
        Email : ".$_POST['email']."
    </center> <br>";
    echo "<center> Waktu login : ".date('l, d-m-Y. H:i:s a')."<center>";
?>