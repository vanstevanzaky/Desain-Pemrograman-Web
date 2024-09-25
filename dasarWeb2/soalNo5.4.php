<?php
$daftarNilaiMtk = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];
$totalNilai = 0;

foreach ($daftarNilaiMtk as $siswa) {
    $totalNilai += $siswa[1];
}

$nilaiRata = $totalNilai / count($daftarNilaiMtk);
echo "Nilai rata-rata: $nilaiRata <br>";
echo "Daftar siswa dengan nilai di atas rata-rata:<br>";

foreach ($daftarNilaiMtk as $siswa) {
    if ($siswa[1] > $nilaiRata) {
        echo $siswa[0] . " dengan nilai: " . $siswa[1] . "<br>";
    }
}
?>
