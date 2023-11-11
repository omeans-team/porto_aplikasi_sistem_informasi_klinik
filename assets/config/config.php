<?php

    $host ="localhost";
    $username ="root";
    $password ="";
    $database ="aplikasi_sistem_informasi_klinik";

    $db = mysqli_connect($host, $username, $password, $database) or die("gagal koneksi ke database");
    //hiden error
    if(mysqli_connect_errno())
    {
    echo'gagal koneksi ke database:'.mysqli_connect_error();
    }
    else {
    }
    error_reporting(0);
?>