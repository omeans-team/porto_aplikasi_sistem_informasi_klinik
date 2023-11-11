<?php
include('../../assets/config/config.php');

//index dokter
// ambil dari database
$query_dokter = "select * from dokter";
$hasil_dokter = mysqli_query($db, $query_dokter);
$data_dokter = array();
while ($row = mysqli_fetch_assoc($hasil_dokter)) {
  $data_dokter[] = $row;
}


//index pasien
// ambil dari database
$query_pasien = "select * from pasien";
$hasil_pasien = mysqli_query($db, $query_pasien);
$data_pasien = array();
while ($row = mysqli_fetch_assoc($hasil_pasien)) {
  $data_pasien[] = $row;
}


//index pegawai
// ambil dari database
$query_pegawai = "select * from pegawai";
$hasil_pegawai = mysqli_query($db, $query_pegawai);
$data_pegawai = array();
while ($row = mysqli_fetch_assoc($hasil_pegawai)) {
  $data_pegawai[] = $row;
}


//index admin
// ambil dari database
$query_admin = "select * from admin";
$hasil_admin = mysqli_query($db, $query_admin);
$data_admin = array();
while ($row = mysqli_fetch_assoc($hasil_admin)) {
  $data_admin[] = $row;
}


//index pengguna
// ambil dari database
$query_pengguna = "select * from pengguna";
$hasil_pengguna = mysqli_query($db, $query_pengguna);
$data_pengguna = array();
while ($row = mysqli_fetch_assoc($hasil_pengguna)) {
  $data_pengguna[] = $row;
}


//index obat
// ambil dari database
$query_obat = "select * from obat";
$hasil_obat = mysqli_query($db, $query_obat);
$data_obat = array();
while ($row = mysqli_fetch_assoc($hasil_obat)) {
  $data_obat[] = $row;
}


//index transaksi
// ambil dari database
$query_transaksi = "select * from transaksi";
$hasil_transaksi = mysqli_query($db, $query_transaksi);
$data_transaksi = array();
while ($row = mysqli_fetch_assoc($hasil_transaksi)) {
  $data_transaksi[] = $row;
}


//index sesi
// ambil dari sesi
$tampilPeg	=mysqli_query($db, "SELECT * FROM pengguna WHERE id='$_SESSION[id]'");
$peg	=mysqli_fetch_array($tampilPeg);


//index tagihan
// ambil dari database
$query_tagihan = "select * from transaksi where id_pasien='$peg[id]'";
$hasil_tagihan = mysqli_query($db, $query_tagihan);
$data_tagihan = array();
while ($row = mysqli_fetch_assoc($hasil_tagihan)) {
  $data_tagihan[] = $row;
}