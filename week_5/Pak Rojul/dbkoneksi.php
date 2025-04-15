<?php
// !) Definisikan Variabel koneklsi database
$host = "localhost";
$db = "dbkampus";
$user = "root";
$pass = "";
$charset = "utf8mb4";

// 2) membuat DSII (data Source Name) dan opsi koneksi datdase
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_EMULATE_PREPARES => false
];

// 3) Buata Koneksi Database
$dbh = new PDO($dsn, $user, $pass, $opt);

?>