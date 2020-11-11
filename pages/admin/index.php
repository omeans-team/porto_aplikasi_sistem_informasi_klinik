<?php
ob_start();
session_start();
if(!isset($_SESSION['uname'])){
    die("<b>Oops!</b> Access Failed.
		<p>Anda telah Logout. Anda harus melakukan Login kembali.</p>
		<button type='button' onclick=location.href='../login'>Login</button>");
}
if(!isset($_SESSION['email'])){
    die("<b>Oops!</b> Access Failed.
		<p>Anda telah Logout. Anda harus melakukan Login kembali.</p>
		<button type='button' onclick=location.href='../login'>Login</button>");
}
if($_SESSION['level']!="administrator"){
    die("<b>Oops!</b> Access Failed.
		<p>Anda Harus Login Terlebih Dahulu.</p>
		<button type='button' onclick=location.href='../login'>Back</button>");
}
	include "koneksi_data.php";
?>
    
    <?php include('../_partials/top.php') ?>


    <!-- Side Navbar -->
    <?php include('../_partials/side-navbar-admin.php') ?>

    <div class="page">
    <?php include('../_partials/navbar-header.php') ?>


    <?php include('../_partials/info_terkini.php') ?>

      <!--?php include('../_partials/footer.php') ?-->
      </div>
      <?php include('../_partials/bottom-index.php') ?>