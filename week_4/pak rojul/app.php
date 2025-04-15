<?php
require_once 'Lingkaran.php';

$Lingkaran1 = new Lingkaran(8.4);
$Lingkaran2 = new Lingkaran(10);

echo "jari-jari Lingkaran1 adalah ". $Lingkaran1->jari;
echo "<br>Nilai PHI adalah ". Lingkaran::PHI;
echo "<br>Luas Lingkaran1 adalah ". $Lingkaran1->getLuas();
echo "<br>Keliling Lingkaran1 adalah ". $Lingkaran1->getKeliling();
echo "<hr>";
$Lingkaran1->cetak();
echo "<hr>";
$Lingkaran2->cetak();

?>