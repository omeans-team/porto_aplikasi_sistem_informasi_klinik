<?php 
include "koneksi_data.php";

// menangkap data dari form
$id = $_POST['id'];
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
$no_tlp = $_POST['no_tlp'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$uname = $_POST['uname'];
$password = $_POST['password'];
$level = $_POST['level'];
$avatar = $_POST['avatar'];

// menginput data ke table pasien dan pengguna

mysqli_query($conn,"insert into pasien values ('$id', '$nama_lengkap', '$jenis_kelamin', '$umur', '$alamat', '$no_tlp', '$email', '$uname', '$password', '$level', '$avatar')") or die(mysqli_error($conn));

mysqli_query($conn,"insert into pengguna values ('$id', '$nama_lengkap', '$email', '$uname', '$password', '$level', '$avatar')") or die(mysqli_error($conn));


// mengalihkan halaman kembali ke index.php
header("Location: data_pasien_read.php");
?>