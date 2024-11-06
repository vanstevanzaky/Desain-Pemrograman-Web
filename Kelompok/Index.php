<?php
    include 'Connection.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Daftar Pengurus Kelas</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Daftar Pengurus Kelas</h1>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Jabatan</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $QueryJabatan = "SELECT * FROM menjabat ORDER BY created_at ASC";
                    $stmt = sqlsrv_query($koneksi, $QueryJabatan);

                    if ($stmt === false) {
                        die("Query failed: " . print_r(sqlsrv_errors(), true));
                    }
                    $no = 1;
                    while ($baris = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $no++ . "</td>";
                        echo "<td>" . $baris['nama_jabatan'] . "</td>";
                        echo "<td>" . $baris['nama'] . "</td>";
                        echo "<td>
                                <a href='Update.php?nama_jabatan=" . $baris['nama_jabatan'] . "' class='btn btn-warning btn-sm'>Update</a>
                                <a href='Delete.php?nama_jabatan=" . $baris['nama_jabatan'] . "' class='btn btn-danger btn-sm'>Delete</a>
                              </td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <a href="Add.php" class="btn btn-primary">Tambah Pengurus Kelas</a>
    </div>
</body>
</html>
