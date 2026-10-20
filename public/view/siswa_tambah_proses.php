<?php include('../../config/my_connection.php'); ?>

<?php

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $nama = $_POST["nama"];
        $gender = $_POST["gender"];
        $kelas = $_POST["kelas"];
        $nilai = $_POST["nilai"];

        $sql = $koneks->prepare("INSERT INTO data_siswa(nama_siswa, jenis_kelamin, kelas, nilai_ujian) VALUES(?,?,?,?)");
        $sql->bind_param("sssi", $nama, $gender, $kelas, $nilai);

        $sql->execute();

        if($sql){
            Header("Location:siswa_data.php");
        }

    }

?>