<?php
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
$nilaiTertinggi = max($nilaiSiswa);
$nilaiTerendah = min($nilaiSiswa);
$totalNilai = 0;
$jumlahSiswa = count($nilaiSiswa);
foreach ($nilaiSiswa as $nilai) {
    if ($nilai !== $nilaiTertinggi && $nilai !== $nilaiTerendah) { 
        $totalNilai  += $nilai; 
    } else {
        $jumlahSiswa--;
    }
}
$rataRata = $totalNilai / $jumlahSiswa;

echo "Total nilai setelah mengabaikan nilai tertinggi dan terendah: " . $totalNilai . "<br>";
echo "Rata-rata nilai: " . $rataRata;
?>