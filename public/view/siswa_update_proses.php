<?php include('../../config/my_connection.php'); ?>

<?php

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $uuid = $_POST["uuid"];

        $nama = $_POST["nama"];
        $gender = $_POST["gender"];
        $kelas = $_POST["kelas"];
        $nilai = $_POST["nilai"];


        $stmt = $koneks->prepare("UPDATE data_siswa SET nama_siswa = ?, jenis_kelamin = ?, kelas = ?, nilai_ujian = ? WHERE id_siswa = ?");
        $stmt->bind_param("sssis", $nama, $gender, $kelas, $nilai, $uuid);

        $stmt->execute();

        if($stmt){
            Header("Location:siswa_data.php");
        }

    }


?>