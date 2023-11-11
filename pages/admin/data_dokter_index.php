<?php
include('../../assets/config/config.php');

// ambil dari database
$query = "select * from dokter";

$hasil = mysqli_query($db, $query);

$data_dokter = array();

while ($row = mysqli_fetch_assoc($hasil)) {
  $data_dokter[] = $row;
}
