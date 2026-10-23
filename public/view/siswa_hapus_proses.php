<?php include('../../config/my_connection.php'); ?>

<?php

    $tid = $_REQUEST["id"];

    $stmt = $koneks->prepare("DELETE FROM data_siswa WHERE id_siswa = ?");
    $stmt->bind_param("s", $tid);

    $stmt->execute();

    if($stmt){
        Header("Location:siswa_data.php");
    }

?>