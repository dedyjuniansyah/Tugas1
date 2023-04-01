<?php
require 'function/koneksi.php';
$pegawai = query ("SELECT * FROM tb_pegawai");
?> 
<!DOCTYPE html>
<html>  
<head>
    <title>Fakhri Agusriadi</title>
</head>
<body>

<h1>Daftar Pegawai</h1>

<a href ="tambah.php">Tambah</a>
<br><br>

<table border = "1" cellpadding = "10" cellspacing ="0">

    <tr> 
        <th>No.</th>
        <th>Nama</th>
        <th>Nip</th>
        <th>Nohp</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($pegawai as $row) :  ?>
    <tr>
        <td><?= $i; ?></td>
       
        <td><?= $row ["nama"]; ?></td>
        <td><?= $row ["nip"]; ?></td>
        <td><?= $row ["noHp"]; ?></td>
        <td><?= $row ["Email"]; ?></td>
        <td>
            <a href ="ubah.php?nip=<?= $row ["nip"]; ?>" onclick="
            return confirm('yakin mengubah?');">ubah</a> |
            <a href ="hapus.php?nip=<?= $row ["nip"]; ?>" onclick="
            return confirm('yakin menghapus?');">hapus</a>
        </td>  
    </tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
</body>
</html>