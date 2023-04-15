<?php
    if (isset($_COOKIE ["N-variable_cookies"])) {
        echo 'Nama variable cookiesnya "N-variable_cookies" nilainya adalah '.$_COOKIE ["N-variable_cookies"];
    } else {
        echo "Variable cookies belum diterapkan";
    }
?>