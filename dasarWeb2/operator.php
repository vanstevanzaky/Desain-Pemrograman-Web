<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat  = $a ** $b;

$hasilSama = $a ==  $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama =  $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd =  $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

$hasilTmbhPngsn = $a += $b;
$hasilKrgPngsn = $a -= $b;
$hasilKliPngsn = $a *= $b;
$hasilBgPngsn = $a /= $b;
$hasilSsBgPngsn = $a %= $b;

?>
<?php
echo"Hasil Tambah = {$hasilTambah}<br>";
echo "Hasil Kurang = {$hasilKurang}<br>";
echo "hasil Kali = {$hasilKali}<br>";
echo"Hasil Bagi = {$hasilBagi}<br>";
echo "Sisa Bagi = {$sisaBagi}<br>";
echo "Pangkat = {$pangkat}<br>";

echo "Hasil Sama = {$hasilSama}<br>";
echo "Hasil Tidak Sama = {$hasilTidakSama}<br>";
echo "Hasil Lebih Kecil = {$hasilLebihKecil}<br>";
echo "Hasil Lebih Besar = {$hasilLebihBesar}<br>";
echo "Hasil Lebih Kecil Sama = {$hasilLebihKecilSama}<br>";
echo "Hasil Lebih Besar Sama = {$hasilLebihBesarSama}<br>";

echo "Hasil And = {$hasilAnd}<br>";
echo "Hasil Or = {$hasilOr}<br>";
echo "Hasil Not A = {$hasilNotA}<br>";
echo "Hasil Not B = {$hasilNotB}<br>";

echo "Hasil Tambah Penugasan (a += b) = {$hasilTmbhPngsn}<br>";
echo "Hasil Kurang Penugasan (a -= b) = {$hasilKrgPngsn}<br>";
echo "Hasil Kali Penugasan (a *= b) = {$hasilKliPngsn}<br>";
echo "Hasil Bagi Penugasan (a /= b) = {$hasilBgPngsn}<br>";
echo "Hasil Sisa Bagi Penugasan (a %= b) = {$hasilSsBgPngsn}<br>";

?>