<?php  
require 'function/koneksi.php';
if (isset ($_POST["submit"])){

    if (tambah ($_POST) > 0 ) {
        echo "
            <script>
                alert ('data berhasil ditambahkan!')
                document.location.href = 'index.php'
            </script>
            ";
    } else {
        echo "
        <script>
            alert ('data gagal ditambahkan!')
            document.location.href = 'index.php'
        </script>
        ";
    }
 


}
?>
<!DOCTYPE html>
<html>
<head>
        <title>Tambah data pegawai</title>
</head>
<body>
    <h1>Tambah Data Pegawai</h1>

    <form action ="" method = "post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type ="text" name ="nama" id="nama"
                require>
            </li>
            <li>
                <label for="nip">NIP : </label>
                <input type ="text" name ="nip" id="nip"
                require>
            </li>
            <li>
                <label for="nohp">NoHp : </label>
                <input type ="text" name ="noHp" id="noHp"
                require>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type ="text" name ="Email" id="Email"
                require>
            </li>
            <li>
                <button type="submit" name="submit">kirim</button>
            </li>
        </ul>

    </from>

</body>
</html>
