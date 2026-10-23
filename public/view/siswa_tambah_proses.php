<?php include('../../config/my_connection.php'); ?>

<?php

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        function generate_uuid4() {
            $data = random_bytes(16);
            $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }

        $uuid = generate_uuid4();

        $nama = $_POST["nama"];
        $gender = $_POST["gender"];
        $kelas = $_POST["kelas"];
        $nilai = $_POST["nilai"];

        $stmt = $koneks->prepare("INSERT INTO data_siswa(id_siswa, nama_siswa, jenis_kelamin, kelas, nilai_ujian) VALUES(?,?,?,?,?)");
        $stmt->bind_param("ssssi", $uuid, $nama, $gender, $kelas, $nilai);
        $stmt->execute();

        if($stmt){
            Header("Location:siswa_data.php");
        }

    }

?>