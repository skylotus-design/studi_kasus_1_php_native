<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $teks1 = "Selamat Sore Dunia!";

        echo $teks1;
        echo "<br><br>";

        echo strtoupper($teks1);
        echo "<br><br>";

        echo strtolower($teks1);
        echo "<br><br>";

        echo str_replace("Dunia", "Danis", $teks1);
        echo "<br><br>";

        echo substr($teks1, 8);
        echo "<br><br>";

        echo substr($teks1, 13);
        echo "<br><br>";

        echo substr($teks1, 13, 2);
        echo "<br><br>";

        echo substr($teks1, -6, 2);
        echo "<br><br>";

        echo strlen($teks1);
        echo "<br><br>";

    ?>
    
</body>
</html>