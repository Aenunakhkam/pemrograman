<?php
function tambah_string(&$str) {
    $str = $str . ", Jakarta";
    return $str;
}

//
$str = "Universitas Budi Luhur";
echo "\$str = $str <br>";
echo tambah_string($str) . "<br>";

// Perbaikan: Menambahkan spasi sebelum <br> pada baris berikut
echo "\$str = $str <br>";
?>
