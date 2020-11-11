<?php
  session_start();
include('../../assets/config/config.php');

// ambil data
$usname = $_REQUEST['uname/email'];
$passw = $_REQUEST['password'];
$data = mysqli_fetch_array(mysqli_query($db,"select * from pengguna where (uname='$usname' or email='$usname') and password='$passw'"));
$email = $data['email'];
$uname = $data['uname'];
$password = $data['password'];
$level = $data['level'];

if (($usname==$uname || $usname==$email)&& $passw==$password) {
  $_SESSION['nama_lengkap']=$nama;
  $_SESSION['id']=$id;
  $_SESSION['level']=$level;
  if($level=='administrator') {header('Location: ../admin');}
  if($level=='dokter') {header('Location: ../dokter');}
  if($level=='pasien') {header('Location: ../pasien');}
} else {
  echo "<script>window.alert('Username atau password salah'); window.location.href='../login'</script>";
}
