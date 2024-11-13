<?php
if (isset($_POST["submit"])) {
    $targerdir= "uploads/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    
    if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targerfile)) {
        echo "File berhasil diunggah";
    } else {
        echo "Gagal mengunggah file.";
    }
}
?>
