<?php 
$no1 = $_POST['txtbil1'];
$no2 = $_POST['txtbil2'];

echo" Bilangan 1 :" .$no1. "<br>";
echo" Bilangan 2 :" .$no2. "<br>";
echo "<br>";
//br sebagai perintah membuat baris baru
echo "<hr>";
//hr sebagai perintah membuat garis horizontal
$tambah = $no1 + $no2 ; 
echo " Hasil Tambah = ".$tambah. "<br>";
$kurang = $no1 - $no2 ; 
echo " Hasil Kurang = ".$kurang. "<br>";
$kali = $no1 * $no2 ; 
echo " Hasil Kali = ".$kali. "<br>";
$bagi = $no1 / $no2 ; 
echo " Hasil Bagi = ".$bagi. "<br>";

?>