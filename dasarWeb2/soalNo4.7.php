<?php
$hargaBeli = 120000;
$hargaMinDis = 100000;
$disc = 20/100;
$hargaAkhir = 0;

if ($hargaBeli > $hargaMinDis) {
    $hargaDiDisikon = $hargaBeli * $disc;
    $hargaAkhir = $hargaBeli - $hargaDiDisikon;
    echo"Anda Mendapat diskon sebesar 20% dari Rp. $hargaBeli menjadi Rp. $hargaAkhir";
} else {
    echo"Anda Tidak Mendapat diskon silahkan bayar dengan harga normal Rp. $hargaBeli";
}
?>