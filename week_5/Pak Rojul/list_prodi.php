<?php
require_once "dbkoneksi.php";
// (4) Query Data Mahasiswa
$sql = "SELECT * FROM mahasiswa";
// 5) Eksekusi Query
$rs = $dbh->query($sql);
// 6) Ambiul data hasil query populasi 
 foreach ($rs as $row) { ?>
<table border="1" width="100%">
    <tr><th>No</th><th>Kode</th><th>Nama</th><th>Kaprodi</th><th>Aksi</th></tr>
    
    <tr>
    <td><?php echo $nomor;?></td>
    <td><?php echo $row->kode; ?></td>
    <td><?php echo $row->nama; ?></td>
    <td><?php echo $row->kaprodi; ?></td>
    <td>
        <a href="form_prodi.php?id_edit=<?php echo $row->id;?>" class="btn btn-primary">Edit</a>
        <a href="proses_prodi.php?id_delete=<?php echo $row->id;?>" class="btn btn-danger">Hapus</a>
    </td>
    </tr>
    <?php }?>
</table>>