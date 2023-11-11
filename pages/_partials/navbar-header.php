      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">

<!-- Start kode -->
<!-- Start kode -->
<!-- Start kode -->
<?php if($peg['level']=='administrator'){ //pembuka1
?> <!-- penutup2-->
<div class="navbar-header"><a id="toggle-btn" href="../admin" class="menu-btn"><i class="icon-bars"> </i></a><a href="../admin" class="navbar-brand">
            <?php //pembuka2
            }?> <!-- penutup1-->
<!-- End kode -->
<!-- End kode -->
<!-- End kode -->
   

<!-- Start kode -->
<!-- Start kode -->
<!-- Start kode -->
<?php if($peg['level']=='pegawai'){ //pembuka1
?> <!-- penutup2-->
<div class="navbar-header"><a id="toggle-btn" href="../pegawai" class="menu-btn"><i class="icon-bars"> </i></a><a href="../pegawai" class="navbar-brand">
            <?php //pembuka2
            }?> <!-- penutup1-->
<!-- End kode -->
<!-- End kode -->
<!-- End kode -->


<!-- Start kode -->
<!-- Start kode -->
<!-- Start kode -->
<?php if($peg['level']=='dokter'){ //pembuka1
?> <!-- penutup2-->
<div class="navbar-header"><a id="toggle-btn" href="../dokter" class="menu-btn"><i class="icon-bars"> </i></a><a href="../dokter" class="navbar-brand">
            <?php //pembuka2
            }?> <!-- penutup1-->
<!-- End kode -->
<!-- End kode -->
<!-- End kode -->



<!-- Start kode -->
<!-- Start kode -->
<!-- Start kode -->
<?php if($peg['level']=='pasien'){ //pembuka1
?> <!-- penutup2-->
<div class="navbar-header"><a id="toggle-btn" href="../pasien" class="menu-btn"><i class="icon-bars"> </i></a><a href="../pasien" class="navbar-brand">
            <?php //pembuka2
            }?> <!-- penutup1-->
<!-- End kode -->
<!-- End kode -->
<!-- End kode -->


              <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Log out-->
                
          <?php include('../../assets/config/config.php'); 


$tampilPeg	=mysqli_query($db, "SELECT * FROM pengguna WHERE id='$_SESSION[id]'");
$peg	=mysqli_fetch_array($tampilPeg);
?>



                <li class="nav-item"><a class="nav-link logout"> <span class="d-none d-sm-inline-block">Hi, <?=$peg['nama_lengkap']?></span></a></li>
                <li class="nav-item"><a href="../logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>