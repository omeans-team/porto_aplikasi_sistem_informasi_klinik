
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



      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header>
            <h1 class="h3 display"><a href="data_obat_create.php" class="btn-tambah">Tambah</a></h1>
            <h1 class="h3 display text-center">DATA OBAT</h1>
          </header>
    <?php include('../_partials/data_index.php') ?>
    <table class="table table-striped table-condensed table-hover" id="tobat">
  <thead>
  <tr><strong>
      <th>NO.</th>
      <th>ID OBAT</th>
      <th>Nama Obat</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>Jenis Obat</th>
      <th>Action</th></strong>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?> <!-- No. Urut -->
    <?php foreach ($data_obat as $obat) : ?> <!-- No. Urut -->
    <tr>
      <td><?php echo $nomor++ ?>.</td> <!-- No. Urut -->
      <td><?php echo $obat['id'] ?></td>
      <td><?php echo $obat['nama_obat'] ?></td>
      <td><?php echo $obat['harga'] ?></td>
      <td><?php echo $obat['stok'] ?></td>
      <td><?php echo $obat['jenis_obat'] ?></td>
      
      <td>
          <p class="p">
            <a href="data_obat_create.php?id=<?php echo $obat['id'] ?>" class="btn-edit">Edit</a>
            <a href="data_obat_delete.php?id=<?php echo $obat['id'] ?>" class="btn-edit" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
          </p>
      </td>
    </tr>
    <?php endforeach ?> <!-- No. Urut -->
  </tbody>
        </table>

        </div>
      </section>
      



      <script>
        $(document).ready(function(){
          $('#tobat').DataTable();
        });
      </script>

    </div>
    
    
    <?php include('../_partials/bottom-tables.php') ?>