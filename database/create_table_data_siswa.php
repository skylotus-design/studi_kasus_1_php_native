<?php

    include('../config/my_connection.php');

    $sql = "CREATE TABLE IF NOT EXISTS data_siswa(
    id_siswa CHAR(36) PRIMARY KEY,
    nama_siswa VARCHAR(225) NOT NULL,
    jenis_kelamin VARCHAR(225) NOT NULL,
    kelas VARCHAR(225) NOT NULL,
    nilai_ujian INT(10) NOT NULL
    )";

    $query = $koneks -> query($sql);

    if($query === true){
        echo " - Tabel 'data_siswa' berhasil dibuat";
    } else {
        echo "Gagal";
    }
?>