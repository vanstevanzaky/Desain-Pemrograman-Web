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