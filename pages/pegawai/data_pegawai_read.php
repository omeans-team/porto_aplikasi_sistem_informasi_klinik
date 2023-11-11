
    <?php include('../_partials/top.php') ?>

    <!-- Side Navbar -->

    <?php include('../_partials/side-navbar-admin.php') ?>

    <div class="page">
      <!-- navbar-->
    <?php include('../_partials/navbar-header.php') ?>

      <!-- Breadcrumb-->
    <?php include('../_partials/top-breadcrumb.php') ?>
            <li class="breadcrumb-item active">Data Pegawai</li>
    <?php include('../_partials/bottom-breadcrumb.php') ?>



      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header>
            <h1 class="h3 display text-center">DATA PEGAWAI</h1>
          </header>
    <?php include('../_partials/data_index.php') ?>
    <table class="table table-striped table-condensed table-hover" id="tpegawai">
  <thead>
  <tr><strong>
      <th>NO.</th>
      <th>ID PEGAWAI</th>
      <th>Nama Lengkap</th>
      <th>Jenis Kelamin</th>
      <th>Umur</th>
      <th>No. Telepon</th>
      <th>Alamat</th>
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
      <td><?php echo $pegawai['umur']," Tahun" ?></td>
      <td><?php echo $pegawai['no_tlp'] ?></td>
      <td><?php echo $pegawai['alamat'] ?></td>
    </tr>
    <?php endforeach ?> <!-- No. Urut -->
  </tbody>
        </table>

        </div>
      </section>
      



      <script>
        $(document).ready(function(){
          $('#tpegawai').DataTable();
        });
      </script>

    </div>
    
    
    <?php include('../_partials/bottom-tables.php') ?>