<?php 
include 'class_mahasiswa.php';

$daftar_mahasiswa = [
    new Mahasiswa("012345", "Budi", 2024, "TI", 3.50),
    new Mahasiswa("012346", "Lutfi", 2024, "SI", 3.75),
    new Mahasiswa("012347", "Rahmat", 2024, "BD", 2.50),
    new Mahasiswa("012348", "Yuli", 2024, "TI", 1.75),
];

if(isset($_POST['nim'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tahun_angkatan = $_POST['angkatan'];
    $prodi = $_POST['prodi'];
    $ipk = $_POST['ipk'];

    array_push($daftar_mahasiswa, new Mahasiswa($nim, $nama, $tahun_angkatan, $prodi, $ipk));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h2>Daftar Mahasiswa</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tahun Angkatan</th>
                    <th>IPK</th>
                    <th>Predikat</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $no = 1;
                foreach ($daftar_mahasiswa as $mhs) { ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $mhs->nim ?></td>
                    <td><?= $mhs->nama ?></td>
                    <td><?= $mhs->tahun_angkatan ?></td>
                    <td><?= $mhs->ipk ?></td>
                    <td><?= $mhs->predikat_ipk(); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>