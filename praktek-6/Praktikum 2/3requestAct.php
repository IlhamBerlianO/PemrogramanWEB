<?php
    // Mengambil nilai bil1 dan bil2 dari link
    $bilangan1 = $_GET['bil1'];
    $bilangan2 = $_GET['bil2'];
    $jumlah = $bilangan1 + $bilangan2;

    // Menampilkan nilai bil1 dan bil2 serta dijumlahkan
    echo "<p>
            Anda telah memasukkan bilangan pertama = ".$bilangan1."
        </p>";
    echo "<p>
        Anda telah memasukkan bilangan kedua = ".$bilangan2."
    </p>";
    echo "<p>
        Hasil jumlahnya adalah ".$jumlah."
    </p>";
?>