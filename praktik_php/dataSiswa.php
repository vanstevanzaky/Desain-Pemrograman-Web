<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="styleData.css"/>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    
    </head>
    <body>
        <h2>Data Siswa SMA Kelas X</h2>
        <button class="button">Klik untuk melihat data</button>
        <div id="tblecntr" style="display:none;">
        <table>
            <tr>
                <th>Nama</th>
                <th>Umur</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
            <?php
            $dataSiswa = array(
                array("Stevan", 20, "10A", "Malang"),
                array("Zaky",21, "10B", "Batu"),
                array("Setya",23, "10C", "Dinoyo"),
                array("Anto",25, "10Q", "Blitar")
            );
            echo"<tr>";
                echo "<td>". $dataSiswa[0][0] ."</td>";
                echo "<td>". $dataSiswa[0][1] ."</td>";
                echo "<td>". $dataSiswa[0][2] ."</td>";
                echo "<td>". $dataSiswa[0][3] ."</td>";
            echo"</tr>";

            echo "<tr>";
                echo "<td>". $dataSiswa[1][0] ."</td>";
                echo "<td>". $dataSiswa[1][1] ."</td>";
                echo "<td>". $dataSiswa[1][2] ."</td>";
                echo "<td>". $dataSiswa[1][3] ."</td>";
            echo "</tr>";

            echo "<tr>";
                echo "<td>". $dataSiswa[2][0] ."</td>";
                echo "<td>". $dataSiswa[2][1] ."</td>";
                echo "<td>". $dataSiswa[2][2] ."</td>";
                echo "<td>". $dataSiswa[2][3] ."</td>";
            echo "</tr>";

            
            echo "<tr>";
                echo "<td>". $dataSiswa[3][0] ."</td>";
                echo "<td>". $dataSiswa[3][1] ."</td>";
                echo "<td>". $dataSiswa[3][2] ."</td>";
                echo "<td>". $dataSiswa[3][3] ."</td>";
            echo "</tr>";
            $totalUmur = 0;
                foreach ($dataSiswa as $siswa) {
                    $totalUmur += $siswa[1];
                }
                $rataRataUmur = $totalUmur / count($dataSiswa);
                echo "<tr>";
                echo "<td colspan='4'><strong>Rata-rata Umur: " . $rataRataUmur . "</strong></td>";
                echo "</tr>";
            ?>
        </table>
        </div>
        <script>
             $(document).ready(function() {
                $('.button').click(function() {
                    $('#tblecntr').slideToggle();  
                })
             });
        </script>
    </body>
</html>
