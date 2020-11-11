<?php 

include('../../assets/config/config.php');

$id=$_GET['id'];


// Attempt delete query execution
//$sql = "DELETE FROM dokter WHERE id='$id'"; khusus satu tabel

$sql = "DELETE pegawai, pengguna
FROM pegawai
JOIN pengguna
ON pegawai.id = pengguna.id
AND pegawai.id = '$id'";

if(mysqli_query($db, $sql)){
    echo "<script>alert('Records were deleted successfully.');</script>";
} else{
    echo "<script>alert('ERROR: Could not able to execute $sql.');</script>" . mysqli_error($db);
}


// mengalihkan halaman kembali ke .php
header("Location: data_pegawai_read.php");
?>