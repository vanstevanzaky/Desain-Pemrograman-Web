<!DOCTYPE html>
<html>
    <head>
        <title>Form input PHP</title>
    </head>
    <body>
        <?php
        $namaErr = "";
        $nama= "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"])) {
                $namaErr = "Nama harus diisi!";
            } else {
                $nama = $_POST["nama"];
                echo "Data berhasil disimpan!";

            }
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" value="<?php $nama; ?>">
            <span class="error"><?php echo $namaErr;?></span><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>
