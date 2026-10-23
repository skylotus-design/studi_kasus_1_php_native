<?php

    $serv = "localhost";
    $usr = "root";
    $pass = "";

    $koneks = new mysqli($serv, $usr, $pass);

    if($koneks -> connect_error){
        die($koneks -> connect_error);
    }

    $sql = "CREATE DATABASE IF NOT EXISTS rumah_belajar";

    $query = $koneks->query($sql);

    if($query === true){
        echo " - Database rumah_belajar berhasil dibuat";
    } else {
        echo "Gagal";
    }


?>