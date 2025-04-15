<?php 
// cara mencetak suatu nilai
    echo "Hello world!<br>";
    $namaDepan = "Ruma";
    $namaBelakang = "isha";
    echo $namaDepan . " ". $namaBelakang;
    echo "<br> ini uji coba!<br>";
    $namaDepan .= " isha<br>";
    echo $namaDepan;
    define("PHI", 3.14);
    // echo PHI;
    $jari = 10;
    $luas = PHI * $jari ** 2;

    echo "luas lingkaran adalah $luas";
?>