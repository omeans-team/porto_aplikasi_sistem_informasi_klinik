
    <?php include('../_partials/top.php') ?>

<!-- Side Navbar -->

<?php include('../_partials/side-navbar-admin.php') ?>

<div class="page">
  <!-- navbar-->
  
<?php include('../_partials/navbar-header.php') ?>

  <!-- Breadcrumb-->
<?php include('../_partials/top-breadcrumb.php') ?>

        <li class="breadcrumb-item active">Data Transaksi</li>

<?php include('../_partials/bottom-breadcrumb.php') ?>

<?php include "koneksi_data.php";?>
<?php

	// mengambil data dengan kode paling besar
	$query = mysqli_query($conn, "select max(id) as kodeTerbesar from transaksi");
	$data = mysqli_fetch_array($query);
	$kodeTransaksi = $data['kodeTerbesar'];

	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kodeTransaksi, 3, 3);

	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;

	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf = "TRS";
	$kodeTransaksi = $huruf . sprintf("%03s", $urutan);
?>


<?php
//mendefinisikan id transaksi apakah dari tombol edit atau bukan
  //jika id diambil dari tombol edit maka
  if(isset($_GET['id'])){
    //$id=id dari tombol edit
    $id=$_GET['id'];
  }
  else{
      //jika tidak, maka $id=$kodeTransaksi;
      $id=$kodeTransaksi;
      
  }
?>

<?php

  $sql=$conn->query("select * from transaksi where id='".$id."'");
  while($rs=$sql->fetch_object()){
    $tanggal=$rs->tanggal;
    $id_pasien=$rs->id_pasien;
    $id_pegawai=$rs->id_pegawai;
    $id_obat=$rs->id_obat;
    $jenis_obat=$rs->jenis_obat;
    $harga_satuan=$rs->harga_satuan;
    $jumlah_obat=$rs->jumlah_obat;
    $total_harga=$rs->total_harga;
  }
?>


  <section class="forms">
    <div class="container-fluid">
      
          <!-- Page Header-->
          <header>
            <h1 class="h3 display"><a href="javascript:history.back()" class="btn-tambah">Back</a></h1>
            <h1 class="h3 display">Data Transaksi</h1>
          </header>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

            <?php
//mendefinisikan id transaksi apakah dari tombol edit atau bukan
  //jika id diambil dari tombol edit maka
  if(isset($_GET['id'])){
    //$id=id dari tombol edit
    $id=$_GET['id'];
    ?> <form class="form-horizontal" action="data_transaksi_update.php" method="post">  <?php
  }
  else{
      //jika tidak, maka $id=$kodeTransaksi;
      $id=$kodeTransaksi;
    ?>  <form class="form-horizontal" action="data_transaksi_simpan.php" method="post"> <?php
  }
?>
              
                <div class="form-group row">
                   <label class="col-sm-2 form-control-label">ID Transaksi</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id" required="required" value="<?php echo $id ?>" readonly>
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="tanggal" required="required" value="<?php echo $tanggal ?>">
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">ID Pasien</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_pasien" required="required" value="<?php echo $id_pasien ?>">
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">ID Pegawai</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_pegawai" required="required" value="<?php echo $id_pegawai ?>">
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">ID Obat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id_obat" required="required" value="<?php echo $id_obat ?>">
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
                  <label class="col-sm-2 form-control-label">Harga</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="harga_satuan" value="<?php echo $harga_satuan ?>">
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Jumlah</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="jumlah_obat" value="<?php echo $jumlah_obat ?>">
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Total Harga</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="total_harga" value="<?php echo $total_harga ?>">
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