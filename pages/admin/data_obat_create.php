
    <?php include('../_partials/top.php') ?>

<!-- Side Navbar -->

<?php include('../_partials/side-navbar-admin.php') ?>

<div class="page">
  <!-- navbar-->
  
<?php include('../_partials/navbar-header.php') ?>

  <!-- Breadcrumb-->
<?php include('../_partials/top-breadcrumb.php') ?>

        <li class="breadcrumb-item active">Data Obat</li>

<?php include('../_partials/bottom-breadcrumb.php') ?>

<?php include "koneksi_data.php";?>
<?php

	// mengambil data dengan kode paling besar
	$query = mysqli_query($conn, "select max(id) as kodeTerbesar from obat");
	$data = mysqli_fetch_array($query);
	$kodeObat = $data['kodeTerbesar'];

	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kodeObat, 3, 3);

	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;

	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "OBT";
	$kodeObat = $huruf . sprintf("%03s", $urutan);
?>


<?php
//mendefinisikan id obat apakah dari tombol edit atau bukan
  //jika id diambil dari tombol edit maka
  if(isset($_GET['id'])){
    //$id=id dari tombol edit
    $id=$_GET['id'];
  }
  else{
      //jika tidak, maka $id=$kodeObat;
      $id=$kodeObat;
      
  }
?>

<?php
  $nama_obat="";
  $harga="";
  $stok="";
  $jenis_obat="";
  $sql=$conn->query("select * from obat where id='".$id."'");
  while($rs=$sql->fetch_object()){
    $nama_obat=$rs->nama_obat;
    $harga=$rs->harga;
    $stok=$rs->stok;
    $jenis_obat=$rs->jenis_obat;
  }

?>


  <section class="forms">
    <div class="container-fluid">
      
          <!-- Page Header-->
          <header>
            <h1 class="h3 display"><a href="javascript:history.back()" class="btn-tambah">Back</a></h1>
            <h1 class="h3 display">Data Obat</h1>
          </header>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

            <?php
//mendefinisikan id obat apakah dari tombol edit atau bukan
  //jika id diambil dari tombol edit maka
  if(isset($_GET['id'])){
    //$id=id dari tombol edit
    $id=$_GET['id'];
    ?> <form class="form-horizontal" action="data_obat_update.php" method="post">  <?php
  }
  else{
      //jika tidak, maka $id=$kodeObat;
      $id=$kodeObat;
    ?>  <form class="form-horizontal" action="data_obat_simpan.php" method="post"> <?php
  }
?>
              
                <div class="form-group row">
                   <label class="col-sm-2 form-control-label">ID Obat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id" required="required" value="<?php echo $id ?>" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Nama Obat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_obat" required="required" value="<?php echo $nama_obat ?>">
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="harga" value="<?php echo $harga ?>">
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Stok</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="stok" value="<?php echo $stok ?>">
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Jenis Obat</label>
                  <div class="col-sm-10 mb-3">   
                        <select name="jenis_obat" class="form-control" type="text">
                          <option selected><?php echo $jenis_obat ?></option>
                          <option>Kapsul</option>
                          <option>Tablet</option>
                          <option>Sirup</option>
                          <option>Bubuk</option>
                        </select>
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <div class="col-sm-4 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  


</div>

<?php include('../_partials/bottom-forms.php') ?>