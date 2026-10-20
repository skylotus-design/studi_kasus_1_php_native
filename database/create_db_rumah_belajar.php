<?php

    include('../config/my_connection.php');

    $sql = "CREATE DATABASE IF NOT EXISTS rumah_belajar";

    $query = $koneks->query($sql);

    if($query === true){
        echo " - Database 'rumah_belajar' berhasil dibuat";
    } else {
        echo "Gagal";
    }


?>