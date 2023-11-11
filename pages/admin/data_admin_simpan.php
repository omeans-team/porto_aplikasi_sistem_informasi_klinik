<?php 
include "koneksi_data.php";

// menangkap data dari form
$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$uname = $_POST['uname'];
$password = $_POST['password'];
$level = $_POST['level'];
$avatar = $_POST['avatar'];

// menginput data ke table admin dan pengguna

mysqli_query($conn,"insert into admin values ('$id', '$nama_lengkap', '$email', '$uname', '$password', '$level', '$avatar')") or die(mysqli_error($conn));

mysqli_query($conn,"insert into pengguna values ('$id', '$nama_lengkap', '$email', '$uname', '$password', '$level', '$avatar')") or die(mysqli_error($conn));


// mengalihkan halaman kembali ke index.php
header("Location: data_admin_read.php");
?>