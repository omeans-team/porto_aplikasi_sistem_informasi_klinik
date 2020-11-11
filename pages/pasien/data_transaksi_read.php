
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



      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header>
            <h1 class="h3 display text-center">DATA TRANSAKSI</h1>
          </header>
    <?php include('../_partials/data_index.php') ?>
    <table class="table table-striped table-condensed table-hover" id="ttagihan">
  <thead>
  <tr><strong>
      <th>NO.</th>
      <th>ID TRANSAKSI</th>
      <th>Tanggal</th>
      <th>ID Pasien</th>
      <th>ID Pegawai</th>
      <th>ID Obat</th>
      <th>Jenis Obat</th>
      <th>Harga Satuan</th>
      <th>Jumlah Obat</th>
      <th>Total Harga</th>
    </tr>
  </thead>
  <tbody>
  <?php include('../../assets/config/config.php'); 


$tampilPeg	=mysqli_query($db, "SELECT * FROM pengguna WHERE id='$_SESSION[id]'");
$peg	=mysqli_fetch_array($tampilPeg);
?>
    <?php $nomor = 1; ?> <!-- No. Urut -->
    <?php foreach ($data_transaksi as $transaksi) : ?> <!-- No. Urut -->
    <tr>
      <td><?php echo $nomor++ ?>.</td> <!-- No. Urut -->
      <td><?php echo $transaksi['id'] ?></td>
      <td><?php echo $transaksi['tanggal'] ?></td>
      <td><?php echo $transaksi['id_pasien'] ?></td>
      <td><?php echo $transaksi['id_pegawai'] ?></td>
      <td><?php echo $transaksi['id_obat'] ?></td>
      <td><?php echo $transaksi['jenis_obat'] ?></td>
      <td><?php echo $transaksi['harga_satuan'] ?></td>
      <td><?php echo $transaksi['jumlah_obat'] ?></td>
      <td><?php echo $transaksi['total_harga'] ?></td>
    </tr>
    <?php endforeach ?> <!-- No. Urut -->
  </tbody>
        </table>

        </div>
      </section>
      



      <script>
        $(document).ready(function(){
          $('#ttagihan').DataTable();
        });
      </script>

    </div>
    
    
    <?php include('../_partials/bottom-tables.php') ?>