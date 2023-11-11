    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->


          <?php include('../../assets/config/config.php'); 


$tampilPeg	=mysqli_query($db, "SELECT * FROM pengguna WHERE id='$_SESSION[id]'");
$peg	=mysqli_fetch_array($tampilPeg);
?>

          <div class="sidenav-header-inner text-center"><img src="../_partials/img/<?=$peg['avatar']?>" alt="avatar" class="img-fluid rounded-circle">
            
          
          
          
          <h2 class="h5"><?=$peg['nama_lengkap']?></h2>
          <span class="text-uppercase"><?=$peg['level']?></span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="" class="brand-small text-center"><strong>K</strong></a></div>
        </div>

        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">

<!-- Start kode -->
<!-- Start kode -->
<!-- Start kode -->
<?php if($peg['level']=='dokter'){ //pembuka1
?> <!-- penutup2-->
            <li><a href="../dokter"> <i class="icon-home"></i>Home</a></li></a></li>
            <li><a href="../dokter/profil.php">Profil</a></li>
            <li><a href="../dokter/edit_profil.php?id=<?php echo $peg['id'] ?>">Edit Profil</a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>DATA PASIEN</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="../dokter/data_obat_read.php">Data Obat</a></li>
                <li><a href="../dokter/data_resep_read.php">Data Resep</a></li>
                <li><a href="../dokter/data_pasien_read.php">Data Pasien</a></li>
                <li><a href="../dokter/data_diagnosa_read.php">Data Diagnosa</a></li>
              </ul>
            </li>
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
            <li><a href="../pasien"> <i class="icon-home"></i>Home</a></li></a></li>
            <li><a href="../pasien/profil.php">Profil</a></li>
            <li><a href="../pasien/edit_profil.php?id=<?php echo $peg['id'] ?>">Edit Profil</a></li>
            <li><a href="../pasien/data_transaksi_read.php">Data Tagihan</a></li>
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
            <li><a href="../pegawai"> <i class="icon-home"></i>Home</a></li></a></li>
            <li><a href="../pegawai/profil.php">Profil</a></li>
            <li><a href="../pegawai/edit_profil.php?id=<?php echo $peg['id'] ?>">Edit Profil</a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>MASTER DATA</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="../pegawai/data_pegawai_read.php">Data Pegawai</a></li>
                <li><a href="../pegawai/data_obat_read.php">Data Obat</a></li>
                <li><a href="../pegawai/data_pasien_read.php">Data Pasien</a></li>
                <li><a href="../pegawai/data_resep_read.php">Data Resep</a></li>
                <li><a href="../pegawai/data_antri_read.php">Data Antrian</a></li>
                <li><a href="../pegawai/data_transaksi_read.php">Data Transaksi</a></li>
              </ul>
            </li>
            <?php //pembuka2
            }?> <!-- penutup1-->
<!-- End kode -->
<!-- End kode -->
<!-- End kode -->


<!-- Start kode -->
<!-- Start kode -->
<!-- Start kode -->
            <?php if($peg['level']=='administrator'){ //pembuka1
?> <!-- penutup2-->
            <li><a href="../admin"> <i class="icon-home"></i>Home</a></li></a></li>
            <li><a href="../admin/edit_profil.php?id=<?php echo $peg['id'] ?>">Edit Profil</a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>MASTER DATA</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="../admin/data_dokter_read.php">Data Dokter</a></li>
                <li><a href="../admin/data_pasien_read.php">Data Pasien</a></li>
                <li><a href="../admin/data_pegawai_read.php">Data Pegawai</a></li>
                <li><a href="../admin/data_admin_read.php">Data Admin</a></li>
                <li><a href="../admin/data_pengguna_read.php">Data Pengguna</a></li>
                <li><a href="../admin/data_transaksi_read.php">Data Transaksi</a></li>
                <li><a href="../admin/data_diagnosa_read.php">Data Diagnosa</a></li>
                <li><a href="../admin/data_obat_read.php">Data Obat</a></li>
              </ul>
            </li>
            <?php //pembuka2
            }?> <!-- penutup1-->
<!-- End kode -->
<!-- End kode -->
<!-- End kode -->

<!-- Start kode -->
<!-- Start kode -->
<!-- Start kode -->
            <?php if($peg['level']=='administrator'){ //pembuka1
?> <!-- penutup2-->


<li><a href="../admin/grafik_dok.php"> <i class="fa fa-bar-chart"></i>Grafik Data</a></li>
<li><a href="../_partials/tables.php"> <i class="icon-grid"></i>Semua Data Tables</a></li>

            <?php //pembuka2
            }?> <!-- penutup1-->
<!-- End kode -->
<!-- End kode -->
<!-- End kode -->

        </div>
      </div>
    </nav>