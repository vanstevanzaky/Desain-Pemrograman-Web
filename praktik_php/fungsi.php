<?php
  function perkenalan(){
    echo"Assalamualaikum, ";
    echo"Perkenalan, nama saya Stevan Zaky Setyanto <br/>";
    echo "Senang berekenalan dengan Anda<br/>";
}
perkenalan();
perkenalan();

echo "<br>";
echo "<br>";

function perkenalan1($nama, $salam){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ". $nama."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}


perkenalan1("Stevan Zaky","Hallo");
echo"<hr>";
$saya = "Zaky Stevan";
$ucapanSalam = "Selamat pagi";

perkenalan1($saya, $ucapanSalam);

echo "<br>";
echo "<br>";
function perkenalan2($nama, $salam="Assalamualaaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ". $nama."<br/>";
    echo "Senang berkenalan dengan Anda";
}
perkenalan2("Zaky","Hallo");
echo"<hr>";
$saya = "Stevan";
$ucapanSalam = "Selamat pagi";
perkenalan2($saya);

echo "<br>";
echo "<br>";

function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
echo"Umur saya adalah " . hitungUmur(2004, 2024);
echo "<br>";
echo "<br>";

function hitungUmur1($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan3($nama, $salam="Assalamualaikum"){
    echo $salam.", ";
    echo "Perkenalkan, nama saya ". $nama."<br/>";
    echo "Saya berusia " . hitungUmur(2004, 2024)
    . " tahun<br>";
    echo "Senang berkenalan dengan Anda<br>";
}
perkenalan3("Stevan");




