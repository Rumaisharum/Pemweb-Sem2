<?php 
$temanSaya = ["Zain", "Indah", "Riza"];
print_r($temanSaya); //untuk menampilkan seluruh nilai array
echo $temanSaya[0];
echo "<ol>";
foreach ($temanSaya as $key => $value) {
    echo "<li>$key. $value</li>";
}
echo "</ol>";
$temanSaya[5] = "Eko";
unset($temanSaya[0]);
print_r($temanSaya);


Echo "<br><br><br><br>";
$buah = ["M" => "Markisa", "R" => "Rambutan"];
print_r($buah)


?>