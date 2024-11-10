<?php
$nim = "22205047";
$nama = 'Aenun Akhkam';
$umur = 22;
$nilai = 80.20;
$status = TRUE;

echo "NIM : " . $nim . "<br>";
echo "Nama: $nama<br>";
print "Umur : " . $umur; print "<br>";
printf ("Nilai : %.3f<br>", $nilai);
if ($status)
    echo "Status : Aktif";
else
   echo "Status : Tidak Aktif";
?> 