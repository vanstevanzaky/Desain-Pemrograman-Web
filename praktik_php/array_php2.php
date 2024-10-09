<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="styleTable.css"/>    
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width", initial-scale1">
        <title>Informasi Dosen</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Informasi</th>
                <th>Keterangan</th>
            </tr>
                <?php 
                    $Dosen =[
                        'nama' => 'Elok Nur Hamdana',
                        'domisili' => 'Malang',
                        'jenis_kelamin' => 'Perempuan' ];

                    echo "<tr><td>Nama</td><td>{$Dosen['nama']}</td></tr>";
                    echo "<tr><td>Domisili</td><td>{$Dosen['domisili']}</td></tr>";
                    echo "<tr><td>Jenis Kelamin</td><td>{$Dosen['jenis_kelamin']}</td></tr>";
                    
                ?>
        </table>
    </body>
</html>