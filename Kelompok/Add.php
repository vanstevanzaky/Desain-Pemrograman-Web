<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_jabatan = $_POST['nama_jabatan'];
    $nama = $_POST['nama'];

    $mencariQuery = "INSERT INTO menjabat (nama_jabatan, nama) VALUES (?, ?)";
    $parameter = array($nama_jabatan, $nama);
    $pernyataan = sqlsrv_query($koneksi, $mencariQuery, $parameter);

    if ($pernyataan === false) {
        die("Insert failed: " . print_r(sqlsrv_errors(), true));
    } else {
        header("Location: Index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Tambah Pengurus Kelas</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Tambah Pengurus Baru</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_jabatan" class="form-label">Jabatan:</label>
                <input type="text" id="nama_jabatan" name="nama_jabatan" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Pengurus</button>
        </form>
        <br>
        <a href="Index.php" class="btn btn-secondary">Kembali ke Daftar Pengurus Kelas</a>
    </div>
</body>
</html>
