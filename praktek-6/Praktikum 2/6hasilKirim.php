<?php
    if (empty($_POST['nama'])) {
        header("Location:6kosong.php");
    } else {
        echo "<center> 
            Nama : ".$_POST['nama']."
        </center>";
    }
?>