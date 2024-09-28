<?php

function perkenalan0(){
    echo"Assalamualaikum, ";
    echo"Perkenalan, nama saya Stevan Zaky Setyanto <br/>";
    echo "Senang berekenalan dengan Anda<br/>";
}
perkenalan0();
perkenalan0();
echo"<br>";
echo "<br>";

?>

<?php
function perkenalan($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ". $nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

perkenalan("Hamdana","Hallo");
echo"<br>";

$saya = "Elok";
$ucapanSalam = "Selamat pagi";

perkenalan($saya, $ucapanSalam);
?>

<?php
function perkenalan1($nama, $salam="Assalamualaaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ". $nama."<br/>";
    echo "Senang berkenalan dengan Anda";
}
perkenalan1("Hamdana","Hallo");
echo"<hr>";
$ucapanSalam = "Selamat pagi";
perkenalan1($saya);
?>

<?php
echo"<br>";
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo"Umur saya adalah " . hitungUmur(2004, 2024);
echo "<br>";
?>

<?php
function hitungUmur1($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan2($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ". $nama."<br/>";
    echo "Saya berusia " . hitungUmur(2004, 2024)
    . " tahun<br>";
    echo "Senang berkenalan dengan Anda<br>";
}
perkenalan2("Stevan")
?>

