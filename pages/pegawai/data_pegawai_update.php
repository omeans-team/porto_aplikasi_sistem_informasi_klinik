<?php 
include('../../assets/config/config.php');

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

$id_up==$_GET['id'];


mysqli_query($db,"update pegawai set nama_lengkap='$nama_lengkap', jenis_kelamin='$jenis_kelamin', umur='$umur', no_tlp='$no_tlp', alamat='$alamat', email='$email', uname='$uname', password='$password', level='$level' where id='$id'") or die(mysqli_error($db));
// menginput data ke table barang
mysqli_query($db,"update pengguna set nama_lengkap='$nama_lengkap', email='$email', uname='$uname', password='$password', level='$level' where id='$id'") or die(mysqli_error($db));



// UPDATE mhs, dummy SET mhs.tgllhr = dummy.tgllhr WHERE mhs.nim = dummy.nim;



// mengalihkan halaman kembali ke index.php
header("Location: data_pegawai_read.php");
?>