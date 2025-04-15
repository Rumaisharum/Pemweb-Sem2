<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<?php
// Data Program Studi
$ar_prodi = [
    "TI" => "Teknik Informatika",
    "SI" => "Sistem Informasi",
    "BD" => "Bisnis Digital"
];

// Data Skill Programming dengan Skor
$ar_skill = [
    "HTML" => 10,
    "CSS" => 10,
    "JavaScript" => 20,
    "RWD Bootstrap" => 20,
    "PHP" => 30,
    "Python" => 30,
    "Java" => 50
];
?>
<div class="container px-5 my-5">
    <form method="POST" action="Submit.php" class="border p-4 rounded shadow-sm">
        <h3 class="text-center mb-4">Formulir Pendaftaran</h3>
        <table class="table table-bordered">
            <thead class="table-light">
                <tr></tr>
            </thead>
            <tbody>
                <tr>
                    <td><label class="form-label" for="nim">NIM</label></td>
                    <td><input class="form-control" id="nim" name="nim" type="number" placeholder="Masukkan NIM" required></td>
                </tr>
                <tr>
                    <td><label class="form-label" for="nama">Nama</label></td>
                    <td><input class="form-control" id="nama" name="nama" type="text" placeholder="Masukkan Nama" required></td>
                </tr>
                <tr>
                    <td><label class="form-label" for="domisili">Domisili</label></td>
                    <td>
                        <select class="form-select" id="domisili" name="domisili">
                            <option value="Jakarta">Jakarta</option>
                            <option value="Depok">Depok</option>
                            <option value="Bogor">Bogor</option>
                            <option value="Tangerang">Tangerang</option>
                            <option value="Bekasi">Bekasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="perempuan" name="jenisKelamin" type="radio" value="Perempuan" required>
                            <label class="form-check-label" for="perempuan">Perempuan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="lakiLaki" name="jenisKelamin" type="radio" value="Laki-Laki" required>
                            <label class="form-check-label" for="lakiLaki">Laki-Laki</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td>
                        <select class="form-select" id="prodi" name="prodi">
                            <?php foreach ($ar_prodi as $kode => $prodi): ?>
                                <option value="<?= $kode; ?>"><?= $prodi; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Skill Programming</td>
                    <td>
                        <?php foreach ($ar_skill as $skill => $score): ?>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="skillProgramming[]" value="<?= $skill; ?>">
                                <label class="form-check-label"><?= $skill; ?> (<?= $score; ?>)</label>
                            </div>
                        <?php endforeach; ?>
                    </td>
                </tr>
                <tr>
                    <td><label class="form-label" for="email">Email</label></td>
                    <td><input class="form-control" id="email" name="email" type="email" placeholder="Masukkan Email" required></td>
                </tr>
            </tbody>
        </table>
        <div class="d-grid mt-3">
            <button class="btn btn-primary btn-lg" type="submit">Submit</button>
        </div>
    </form>
</div>

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
