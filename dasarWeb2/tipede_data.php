<?php 
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;
echo "Variabel a: {$a} <br>";
echo "Variabel b: {$b} <br>";
echo "Variabel c: {$c} <br>";
echo "Variabel d: {$d} <br>";
echo "Variabel e: {$e} <br>";
var_dump($e);
?>
<?php
$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

echo "<br>Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata-rata: {$rataRata} <br>";

var_dump($rataRata);
echo"<br>";

?>
<?php
$apakahSiswaLulus = true;
$apakahSiswaSudahUjian = false;

var_dump($apakahSiswaLulus);
echo"<br>";
var_dump($apakahSiswaSudahUjian);
?>
<?php
$namaDepan = "Ibnu";
$namaBelakang = 'Jakaria';

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan .' ' . $namaBelakang;
echo "<br>Nama Depan: {$namaDepan} <br>";
echo 'Nama Belakang: ' . $namaBelakang .'<br>';

echo $namaLengkap;
?>
<?php
echo "<br>";
$listMahasiswa = ["Wahid Abdullah", "Elmo Bacthiar", "Lendis Fabri"];
echo $listMahasiswa[0];
?>