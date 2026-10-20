<?php

    $serv = "localhost";
    $usr = "root";
    $pass = "";
    $db = "rumah_belajar";

    $koneks = new mysqli($serv, $usr, $pass, $db);

    if($koneks -> connect_error){
        die($koneks -> connect_error);
    } else {
        echo "";
    }

?>