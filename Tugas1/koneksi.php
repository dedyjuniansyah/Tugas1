<?php

$conn = mysqli_connect ("localhost", "root", "", "pegawai" );


function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;      
    }
    return $rows;  
}


function tambah($data){
    global $conn;
    $nama = $data ["nama"];
    $nip = $data ["nip"];
    $noHp = $data ["noHp"]; 
    $Email = $data ["Email"];

    $query = "INSERT INTO tb_pegawai
    VALUES 
    ('$nama', '$nip', '$noHp', '$Email')
    ";
mysqli_query ($conn, $query);

return mysqli_affected_rows ($conn);
}

function hapus ($nip) {
    global $conn;
    mysqli_query ($conn, "DELETE FROM tb_pegawai WHERE nip = $nip");
    return mysqli_affected_rows ($conn);
}

function ubah($data){
    global $conn;
    $nama = $data ["nama"];
    $nip = $data ["nip"];
    $noHp = $data ["noHp"]; 
    $Email = $data ["Email"];

    $query = "UPDATE tb_pegawai SET
        nama = '$nama',
        nip = '$nip',
        noHp = '$noHp',
        Email = '$Email'
    WHERE nip = $nip
    ";
mysqli_query ($conn, $query);

return mysqli_affected_rows ($conn);
}





?>