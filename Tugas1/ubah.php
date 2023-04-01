<?php  
require 'function/koneksi.php';

$nip = $_GET["nip"];

$pgw= query ("SELECT * FROM tb_pegawai WHERE nip = $nip")[0];


if (isset ($_POST["submit"])){

    if (ubah ($_POST) > 0 ) {
        echo "
            <script>
                alert ('data berhasil diubah!')
                document.location.href = 'index.php'
            </script>
            ";
    } else {
        echo "
        <script>
            alert ('data gagal diubah!')
            document.location.href = 'index.php'
        </script>
        ";
    }
 


}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Ubah data pegawai</title>
</head>
<body>
    <h1>Ubah Data Pegawai</h1>

    <form action ="" method = "post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type ="text" name ="nama" id="nama"
                value="<?= $pgw ["nama"]; ?>">
            </li>
            <li>
                <label for="nip">NIP : </label>
                <input type ="text" name ="nip" id="nip"
                value="<?= $pgw ["nip"]; ?>">
            </li>
            <li>
                <label for="nohp">NoHp : </label>
                <input type ="text" name ="noHp" id="noHp"
                value="<?= $pgw ["noHp"]; ?>">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type ="text" name ="Email" id="Email"
                value="<?= $pgw ["Email"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data</button>
            </li>
        </ul>

    </from>

</body>
</html>
