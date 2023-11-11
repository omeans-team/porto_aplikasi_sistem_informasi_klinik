<?php
session_start();
if (!isset($_SESSION['level'])) {
  // jika user belum login
  header('Location: ../login');
  exit();
}?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi Sistem Informasi Klinik</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="../_partials/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../_partials/vendor/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../_partials/vendor/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="../_partials/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../_partials/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="../_partials/https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="../_partials/css/grasFp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="../_partials/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../_partials/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../_partials/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../_partials/img/favicon.png">

    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
        
    <!-- JavaScript files-->
    <script src="../_partials/vendor/jquery/jquery.min.js"></script>
    <script src="../_partials/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../_partials/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="../_partials/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="../_partials/vendor/chart.js/Chart.min.js"></script>
    <script src="../_partials/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="../_partials/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../_partials/js/charts-custom.js"></script>
    <script src="../_partials/js/diagram_data.js"></script>
    <script src="../_partials/js/Chart.js"></script>
    
    
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  </head>
  <body>