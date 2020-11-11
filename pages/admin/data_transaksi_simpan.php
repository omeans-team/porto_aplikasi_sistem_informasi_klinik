<?php 
include "koneksi_data.php";

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

// menginput data ke table transaksi dan pengguna

mysqli_query($conn,"insert into transaksi values ('$id', '$tanggal', '$id_pasien', '$id_pegawai', '$id_obat', '$jenis_obat', '$harga_satuan', '$jumlah_obat', '$total_harga')") or die(mysqli_error($conn));

// mengalihkan halaman kembali ke index.php
header("Location: data_transaksi_read.php");
?>