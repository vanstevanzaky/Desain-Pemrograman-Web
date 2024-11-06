<?php
include 'Connection.php';

if (isset($_GET['nama_jabatan'])) {
    $nama_jabatan = $_GET['nama_jabatan'];

    $hapusQuery = "DELETE FROM menjabat WHERE nama_jabatan = ?";
    $pernyataan = sqlsrv_query($koneksi, $hapusQuery, array($nama_jabatan));

    if ($pernyataan === false) {
        die("Delete failed: " . print_r(sqlsrv_errors(), true));
    } else {
        header("Location: Index.php");
        exit;
    }
}

