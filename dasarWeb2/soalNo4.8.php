<?php
$poin = 450;
$minDapatHadiah = 500;
if ($poin > $minDapatHadiah) {
    echo"Total Skor pemain adalah: $poin poin<br>";
    echo"Pemain pendapatkan hadiah tambahan";
} else {
    echo "Total Skor pemain adalah: $poin poin<br>";
    echo "Pemain tidak mendapatkan hadiah tambahan";
}
?>