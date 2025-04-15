<?php
require_once 'class_nilaimahasiswa.php';

// Membuat objek dari class nilaimahasiswa
$mhs1 = new NilaiMahasiswa();
$mhs1->nama = "Rizki";
$mhs1->matakuliah = "Pemrograman web";
$mhs1->nilai_uts = "77";
$mhs1->nilai_uas = "80";
$mhs1->nilai_tugas = "90";

$mhs2 = new NilaiMahasiswa();
$mhs2->nama = "Amaliah";
$mhs2->matakuliah = "Dasar-dasar Pemrograman";
$mhs2->nilai_uts = "85";
$mhs2->nilai_uas = "90";
$mhs2->nilai_tugas = "78";

$mhs3 = new NilaiMahasiswa();
$mhs3->nama = "Udin";
$mhs3->matakuliah = "Data base";
$mhs3->nilai_uts = "50";
$mhs3->nilai_uas = "45";
$mhs3->nilai_tugas = "60";

// menyimpan objek dalam array
$ar_mahasiswa = [$mhs1, $mhs2, $mhs3];
?>

<h2 style="text-align:center">Daftar Nilai Mahasiswa</h2>

<table border="1" cellpading="2" cellspasing="2" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>MataKuliah</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>NilAkhir</th>
            <th>Kelulusan</th>
        </tr>
    </thead>
    <tbody>
    <td><?= $nomor ?></td>
            <td><?= $obj->nama; ?></td>
            <td><?= $obj->matakuliah; ?></td>
            <td><?= $obj->nilai_uts; ?></td>
            <td><?= $obj->nilai_uas; ?></td>
            <td><?= number_format($obj->getNilaiAkhir(), 2); ?></td>
            <td><?= $obj->getKelulusan(); ?></td>
        </tr>
        <?php $nomor++; } ?>
    </tbody>