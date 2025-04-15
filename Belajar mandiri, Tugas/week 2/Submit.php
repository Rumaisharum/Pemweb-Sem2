<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pendaftaran</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container px-5 my-5">
    <h3 class="text-center mb-4">Hasil Pendaftaran</h3>

    <?php
    // Pastikan data dikirim dengan metode POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST["nim"] ?? "-";
        $nama = $_POST["nama"] ?? "-";
        $domisili = $_POST["domisili"] ?? "-";
        $jenisKelamin = $_POST["jenisKelamin"] ?? "-";
        $prodi = $_POST["prodi"] ?? "-";
        $email = $_POST["email"] ?? "-";
        $skillProgramming = $_POST["skillProgramming"] ?? [];

        // Data skill programming dengan skor
        $ar_skill = [
            "HTML" => 10,
            "CSS" => 10,
            "JavaScript" => 20,
            "RWD Bootstrap" => 20,
            "PHP" => 30,
            "Python" => 30,
            "Java" => 50
        ];

        // Hitung total skor skill programming
        $totalSkor = 0;
        foreach ($skillProgramming as $skill) {
            $totalSkor += $ar_skill[$skill] ?? 0;
        }
    ?>

    <table class="table table-bordered">
        <tr>
            <th>Field</th>
            <th>Data</th>
        </tr>
        <tr>
            <td>NIM</td>
            <td><?= htmlspecialchars($nim); ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?= htmlspecialchars($nama); ?></td>
        </tr>
        <tr>
            <td>Domisili</td>
            <td><?= htmlspecialchars($domisili); ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?= htmlspecialchars($jenisKelamin); ?></td>
        </tr>
        <tr>
            <td>Prodi</td>
            <td><?= htmlspecialchars($prodi); ?></td>
        </tr>
        <tr>
            <td>Skill Programming</td>
            <td>
                <?= empty($skillProgramming) ? "Tidak ada" : implode(", ", array_map("htmlspecialchars", $skillProgramming)); ?>
            </td>
        </tr>
        <tr>
            <td>Total Skor Skill</td>
            <td><?= $totalSkor; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= htmlspecialchars($email); ?></td>
        </tr>
    </table>

    <div class="text-center mt-4">
        <a href="Form.php" class="btn btn-primary">Kembali</a>
    </div>

    <?php
    } else {
        echo "<p class='text-danger text-center'>Tidak ada data yang dikirim.</p>";
    }
    ?>
</div>

</body>
</html>
