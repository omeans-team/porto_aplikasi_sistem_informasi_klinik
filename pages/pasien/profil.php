
    <?php include('../_partials/top.php') ?>

<!-- Side Navbar -->

<?php include('../_partials/side-navbar-admin.php') ?>

<div class="page">
  <!-- navbar-->
  
<?php include('../_partials/navbar-header.php') ?>

  <!-- Breadcrumb-->
<?php include('../_partials/top-breadcrumb.php') ?>

        <li class="breadcrumb-item active">Data Pasien</li>

<?php include('../_partials/bottom-breadcrumb.php') ?>

<?php include "koneksi_data.php";?>

<?php
  $nama_lengkap="";
  $jenis_kelamin="Laki-laki";
  $umur="";
  $no_tlp="";
  $alamat="";
  $level="pasien";
  $avatar="avatar.jpg";
  $sql=$conn->query("select * from pasien WHERE id='$_SESSION[id]'");
  while($rs=$sql->fetch_object()){
    $id=$rs->id;
    $nama_lengkap=$rs->nama_lengkap;
    $jenis_kelamin=$rs->jenis_kelamin;
    $umur=$rs->umur;
    $no_tlp=$rs->no_tlp;
    $alamat=$rs->alamat;
    $email=$rs->email;
    $uname=$rs->uname;
    $password=$rs->password;
  }

?>



  <section class="forms">
    <div class="container-fluid">
      
          <!-- Page Header-->
          <header>
            <h1 class="h3 display">Data Pasien</h1>
          </header>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">

 <form class="form-horizontal" method="post">
              
                <div class="form-group row">
                   <label class="col-sm-2 form-control-label">ID Pasien</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="id" required="required" value="<?php echo $id ?>" readonly>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_lengkap" required="required" value="<?php echo $nama_lengkap ?>" readonly>
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Jenis Kelamin</label>
                  <div class="col-sm-10 mb-3">   
                        <select name="jenis_kelamin" class="form-control" type="text" readonly>
                          <option selected><?php echo $jenis_kelamin ?></option>
                        </select>
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Umur</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="umur" value="<?php echo $umur ?>" readonly>
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">No Telepon</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="no_tlp" value="<?php echo $no_tlp ?>" readonly>
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" value="<?php echo $alamat ?>" readonly>
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="<?php echo $email ?>" readonly>
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="uname" value="<?php echo $uname ?>" readonly>
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <label class="col-sm-2 form-control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="password" value="<?php echo $password ?>" readonly>
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="level" value="<?php echo $level ?>">
                  </div>
                </div>
                <div class="line"></div>
                <div class="form-group row">
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" name="avatar" value="<?php echo $avatar ?>">
                  </div>
                </div>
                <div class="line"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  


</div>

<?php include('../_partials/bottom-forms.php') ?>