<?php

function generate_uuid4() {
    // Mengambil 16 bytes data acak yang aman secara kriptografi
    $data = random_bytes(16);

    // Mengatur versi UUID menjadi 4 (UUID v4)
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Mengatur varian (RFC 4122)
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    // Mengubah data bytes menjadi format string UUID standard
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}

// Cara Penggunaan:
$new_uuid = generate_uuid4();
echo $new_uuid; // Hasil: e43a2c5a-313d-4c3a-a1b4-23942065842c

?>