<?php
    include "../database/koneksi.php";
    $query = mysqli_query($conn, "SELECT * FROM pegawai");
    while($data = mysqli_fetch_array($query)){
        $item[] = array(
            'nip' => $data['nip'],
            'nama' => $data['nama'],
            'alamat' => $data['alamat']
        );
    }

    $response = array(
        'status' => 'OK',
        'data' => $item
    );

    echo json_encode($response);
    
?>