<?php
require_once "dbkoneksi.php";
include_once "Layouts/header.php";
include_once "Layouts/sidebar.php";
// (4) Query Data Mahasiswa
$sql = "SELECT * FROM mahasiswa";
// 5) Eksekusi Query
$rs = $dbh->query($sql);
// 6) Ambiul data hasil query populasi 
foreach ($rs as $row) {
    echo '<br>'.$row->nim. ' - ' . $row->nama;
}
?>