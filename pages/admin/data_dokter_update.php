<?php 
include('../../assets/config/config.php');

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

$id_up==$_GET['id'];


mysqli_query($db,"update dokter set nama_lengkap='$nama_lengkap', jenis_kelamin='$jenis_kelamin', umur='$umur', gaji_dokter='$gaji_dokter', email='$email', uname='$uname', password='$password', level='$level' where id='$id'") or die(mysqli_error($db));
// menginput data ke table barang
mysqli_query($db,"update pengguna set nama_lengkap='$nama_lengkap', email='$email', uname='$uname', password='$password', level='$level' where id='$id'") or die(mysqli_error($db));



// UPDATE mhs, dummy SET mhs.tgllhr = dummy.tgllhr WHERE mhs.nim = dummy.nim;



// mengalihkan halaman kembali ke index.php
header("Location: data_dokter_read.php");
?>