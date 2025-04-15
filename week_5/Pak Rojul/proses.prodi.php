<?<?php 
require_once'dbkoneksi.php';
// 4) Tangkap request form
$_kode = $_POST['kode']; //1
$_nama = $_POST['nama']; //2
$_Kaprodi = $_POST['Kaprodi'];  //3
$_proses = $_POST['proses'];

// simpan dalam array data
$ar_data = [$_kode, $_nama, $_Kaprodi];

// 5) definisikan query $sql
if($_proses == "Simpan"){
    $sql = "INSERT INTO prodi(kode, nama, Kaprodi) VALUES (?,?,?)";
}elseif($_proses == "Update"){
    $sql = "UPDATE prodi SET kode=?, nama=?, Kaprodi=? WHERE id=?";
    $id_edit = $_POST['id_edit']; 
    $ar_data[] = $id_edit; // 4
}elseif ($_proses == "Hapus"){
    $sql = "DELETE FROM prodi WHERE id=?";
    unset($ar_data); // hapus array
    $id_delete = $_POST['id_delete'];
    $ar_data[] = $_POST['id_edit'];
}
// 6) buat statement query
$stmt = $dbh->prepare($sql);

// 7) Eksekusi query
$stmt->execute($ar_data);

// redirect ke halaman list_prodi

?>