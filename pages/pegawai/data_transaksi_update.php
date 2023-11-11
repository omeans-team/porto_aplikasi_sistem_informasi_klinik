<?php 
include('../../assets/config/config.php');

// menangkap data dari form
$id = $_POST['id'];
$tanggal= $_POST['tanggal'];
$id_pasien = $_POST['id_pasien'];
$id_pegawai = $_POST['id_pegawai'];
$id_obat = $_POST['id_obat'];
$jenis_obat = $_POST['jenis_obat'];
$harga_satuan = $_POST['harga_satuan'];
$jumlah_obat = $_POST['jumlah_obat'];
$total_harga = $_POST['total_harga'];


$id_up==$_GET['id'];


mysqli_query($db,"update transaksi set tanggal='$tanggal', id_pasien='$id_pasien', id_pegawai='$id_pegawai', id_obat='$id_obat' , jenis_obat='$jenis_obat', harga_satuan='$harga_satuan', jumlah_obat='$jumlah_obat', total_harga='$total_harga' where id='$id'") or die(mysqli_error($db));


// UPDATE mhs, dummy SET mhs.tgllhr = dummy.tgllhr WHERE mhs.nim = dummy.nim;



// mengalihkan halaman kembali ke index.php
header("Location: data_transaksi_read.php");
?>