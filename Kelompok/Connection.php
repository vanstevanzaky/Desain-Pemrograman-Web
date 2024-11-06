<?php
    $serverName = "LAPTOP-E5UIF2PR";
    $databaseName = "jabatan";
    $username = "";
    $password = "";

    $opsikoneksi = array("Database"=> $databaseName, "UID"=>$username, "PWD"=>$password);

    $koneksi = sqlsrv_connect($serverName, $opsikoneksi);

    if ($koneksi === false) {
        die("connection failed : ".print_r(sqlsrv_errors(), true));
    }

?>