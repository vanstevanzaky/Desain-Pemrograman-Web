<?php
include 'Connection.php';

if (isset($_GET['nama_jabatan'])) {
    $nama_jabatan = $_GET['nama_jabatan'];

    $query = "SELECT * FROM menjabat WHERE nama_jabatan = ?";
    $pernyataan = sqlsrv_query($koneksi, $query, array($nama_jabatan));

    if ($pernyataan === false) {
        die("Query failed: " . print_r(sqlsrv_errors(), true));
    }

    $jabatan = sqlsrv_fetch_array($pernyataan, SQLSRV_FETCH_ASSOC);
    if (!$jabatan) {
        echo "Jabatan tidak ditemukan.";
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jabatan_baru = $_POST['nama_jabatan'];
    $nama = $_POST['nama'];

    $updateQuery = "UPDATE menjabat SET nama_jabatan = ?, nama = ? WHERE nama_jabatan = ?";
    $parameter = array($jabatan_baru, $nama, $nama_jabatan);
    $pernyataan = sqlsrv_query($koneksi, $updateQuery, $parameter);

    if ($pernyataan === false) {
        die("Update gagal: " . print_r(sqlsrv_errors(), true));
    } else {
        header("Location: Index.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Update Jabatan</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Update Jabatan</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama_jabatan" class="form-label">Jabatan:</label>
                <input type="text" id="nama_jabatan" name="nama_jabatan" class="form-control" value="<?php echo $jabatan['nama_jabatan']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $jabatan['nama']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Jabatan</button>
        </form>
        <br>
        <a href="Index.php" class="btn btn-secondary">Kembali ke Daftar Pengurus</a>
    </div>
</body>
</html>
