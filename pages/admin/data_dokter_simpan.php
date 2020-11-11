<?php 
include "koneksi_data.php";

// menangkap data dari form
$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
$gaji_dokter = $_POST['gaji_dokter'];
$email = $_POST['email'];
$uname = $_POST['uname'];
$password = $_POST['password'];
$level = $_POST['level'];
$avatar = $_POST['avatar'];
// menginput data ke table barang

mysqli_query($conn,"insert into dokter values ('$id', '$nama_lengkap', '$jenis_kelamin', '$umur', '$gaji_dokter', '$email', '$uname', '$password', '$level', '$avatar')") or die(mysqli_error($conn));

mysqli_query($conn,"insert into pengguna values ('$id', '$nama_lengkap', '$email', '$uname', '$password', '$level', '$avatar')") or die(mysqli_error($conn));


// mengalihkan halaman kembali ke index.php
header("Location: data_dokter_read.php");
?>