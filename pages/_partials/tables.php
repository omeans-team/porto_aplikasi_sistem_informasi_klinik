
    <?php include('../_partials/top.php') ?>

    <!-- Side Navbar -->

    <?php include('../_partials/side-navbar-admin.php') ?>

    <div class="page">
      <!-- navbar-->
    <?php include('../_partials/navbar-header.php') ?>

      <!-- Breadcrumb-->
    <?php include('../_partials/top-breadcrumb.php') ?>
            <li class="breadcrumb-item active">Tables       </li>
    <?php include('../_partials/bottom-breadcrumb.php') ?>


   
    <?php include('data_index.php') ?>

    <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">DATA TABEL</h1>
          </header>
          <div class="row">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Admin</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="tadmin">
                      <thead>
                        <tr>
                            <th>NO.</th>
                            <th>ID ADMIN</th>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>Username</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $nomor = 1; ?> <!-- No. Urut -->
                        <?php foreach ($data_admin as $admin) : ?> <!-- No. Urut -->
                        <tr>
                          <td><?php echo $nomor++ ?>.</td> <!-- No. Urut -->
                          <td><?php echo $admin['id'] ?></td>
                          <td><?php echo $admin['nama_lengkap'] ?></td>
                          <td><?php echo $admin['email'] ?></td>
                          <td><?php echo $admin['uname'] ?></td>
                        </tr>
                        <?php endforeach ?> <!-- No. Urut -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Obat</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover"  id="tobat">
                      <thead>
                        <tr>
                            <th>NO.</th>
                            <th>ID OBAT</th>
                            <th>Nama Obat</th>
                            <th>Jenis Obat</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $nomor = 1; ?> <!-- No. Urut -->
                        <?php foreach ($data_obat as $obat) : ?> <!-- No. Urut -->
                        <tr>
                          <td><?php echo $nomor++ ?>.</td> <!-- No. Urut -->
                          <td><?php echo $obat['id'] ?></td>
                          <td><?php echo $obat['nama_obat'] ?></td>
                          <td><?php echo $obat['jenis_obat'] ?></td>
                        </tr>
                        <?php endforeach ?> <!-- No. Urut -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Dokter</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped" id="tdokter">
                      <thead>
                        <tr>
                            <th>NO.</th>
                            <th>ID DOKTER</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Umur</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $nomor = 1; ?> <!-- No. Urut -->
                        <?php foreach ($data_dokter as $dokter) : ?> <!-- No. Urut -->
                        <tr>
                          <td><?php echo $nomor++ ?>.</td> <!-- No. Urut -->
                          <td><?php echo $dokter['id'] ?></td>
                          <td><?php echo $dokter['nama_lengkap'] ?></td>
                          <td><?php echo $dokter['jenis_kelamin'] ?></td>
                          <td><?php echo $dokter['umur'] ?></td>
                        </tr>
                        <?php endforeach ?> <!-- No. Urut -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Pasien</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-sm"  id="tpasien">
                      <thead>
                        <tr>
                            <th>NO.</th>
                            <th>ID PASIEN</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Umur</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $nomor = 1; ?> <!-- No. Urut -->
                        <?php foreach ($data_pasien as $pasien) : ?> <!-- No. Urut -->
                        <tr>
                          <td><?php echo $nomor++ ?>.</td> <!-- No. Urut -->
                          <td><?php echo $pasien['id'] ?></td>
                          <td><?php echo $pasien['nama_lengkap'] ?></td>
                          <td><?php echo $pasien['jenis_kelamin'] ?></td>
                          <td><?php echo $pasien['umur'] ?></td>
                        </tr>
                        <?php endforeach ?> <!-- No. Urut -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-header">
                  <h4>Compact Table</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-sm"  id="tpegawai">
                      <thead>
                        <tr>
                            <th>NO.</th>
                            <th>ID PEGAWAI</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Umur</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php $nomor = 1; ?> <!-- No. Urut -->
                        <?php foreach ($data_pegawai as $pegawai) : ?> <!-- No. Urut -->
                        <tr>
                          <td><?php echo $nomor++ ?>.</td> <!-- No. Urut -->
                          <td><?php echo $pegawai['id'] ?></td>
                          <td><?php echo $pegawai['nama_lengkap'] ?></td>
                          <td><?php echo $pegawai['jenis_kelamin'] ?></td>
                          <td><?php echo $pegawai['umur'] ?></td>
                        </tr>
                        <?php endforeach ?> <!-- No. Urut -->
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>



      <script>
        $(document).ready(function(){
          $('#tadmin').DataTable();
        });
      </script>

      <script>
        $(document).ready(function(){
          $('#tdokter').DataTable();
        });
      </script>

      <script>
        $(document).ready(function(){
          $('#tobat').DataTable();
        });
      </script>
      
      <script>
        $(document).ready(function(){
          $('#tpasien').DataTable();
        });
      </script>
      
      <script>
        $(document).ready(function(){
          $('#tpegawai').DataTable();
        });
      </script>

    </div>
    
    
    <?php include('../_partials/bottom-tables.php') ?>