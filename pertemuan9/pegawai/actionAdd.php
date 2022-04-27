<?php
include "../database/koneksi.php";

    
    $nip = $_POST['nip']; 
    $nama = $_POST['nama']; 
    $alamat = $_POST['alamat'];

   $query = mysqli_query($conn, "INSERT INTO pegawai set nip = '$nip', nama = '$nama', alamat = '$alamat'");

   if ($query) {
    $message = "Data berhasil ditambahkan!";
    
    $respone = array(
    'status' => "OK",
    'message' => $message
    );
    echo json_encode($respone,JSON_PRETTY_PRINT);

    } else {
        $message = "Data gagal ditambahkan!";
    }


?>