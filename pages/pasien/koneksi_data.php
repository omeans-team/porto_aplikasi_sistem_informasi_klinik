<?php
$conn = new mysqli("localhost","root","","aplikasi_sistem_informasi_klinik");
if(mysqli_connect_errno())
{
echo'gagal koneksi ke database:'.mysqli_connect_error();
}
else {
}
error_reporting(0);
?>