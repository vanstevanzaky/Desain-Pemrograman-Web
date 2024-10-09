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
