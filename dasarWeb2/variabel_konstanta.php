<?php
$angka1 = 10;
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumalahan $angka1 dan $angka2 adalah $hasil.<br>";
?>
<?php
$benar = true;
$salah = false;
echo "Variabel benar: $benar, Varibel salah: $salah<br>";
?>
<?php   
define("NAMA_SITUS", "Websitku.com");
define("TAHUN_PENDIRIAN", 2023);

echo " Selamat datang di " . NAMA_SITUS . ", situs yang
didirikan pada tahun " . TAHUN_PENDIRIAN . ".";
?>