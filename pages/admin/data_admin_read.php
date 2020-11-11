
    <?php include('../_partials/top.php') ?>

    <!-- Side Navbar -->

    <?php include('../_partials/side-navbar-admin.php') ?>

    <div class="page">
      <!-- navbar-->
    <?php include('../_partials/navbar-header.php') ?>

      <!-- Breadcrumb-->
    <?php include('../_partials/top-breadcrumb.php') ?>
            <li class="breadcrumb-item active">Data Admin</li>
    <?php include('../_partials/bottom-breadcrumb.php') ?>



      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header>
            <h1 class="h3 display"><a href="data_admin_create.php" class="btn-tambah">Tambah</a></h1>
            <h1 class="h3 display text-center">DATA ADMIN</h1>
          </header>
    <?php include('../_partials/data_index.php') ?>

    <table class="table table-striped table-condensed table-hover" id="tadmin">
  <thead>
  <tr><strong>
      <th>NO.</th>
      <th>ID ADMIN</th>
      <th>Nama Lengkap</th>
      <th>Email</th>
      <th>Username</th>
      <th>Action</th></strong>
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
      
      <td>
          <p class="p">
            
            <a href="data_admin_create.php?id=<?php echo $admin['id'] ?>" class="btn-edit">Edit</a>
            <a href="data_admin_delete.php?id=<?php echo $admin['id'] ?>" class="btn-edit" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
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
          $('#tadmin').DataTable();
        });
      </script>

    </div>
    
    
    <?php include('../_partials/bottom-tables.php') ?>