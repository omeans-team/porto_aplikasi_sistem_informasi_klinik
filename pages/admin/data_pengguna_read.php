
    <?php include('../_partials/top.php') ?>

    <!-- Side Navbar -->

    <?php include('../_partials/side-navbar-admin.php') ?>

    <div class="page">
      <!-- navbar-->
    <?php include('../_partials/navbar-header.php') ?>

      <!-- Breadcrumb-->
    <?php include('../_partials/top-breadcrumb.php') ?>
            <li class="breadcrumb-item active">Data Pengguna</li>
    <?php include('../_partials/bottom-breadcrumb.php') ?>



      <section>
        <div class="container-fluid">
          <!-- Page Header-->
          <header>
            <h1 class="h3 display text-center">DATA PENGGUNA</h1>
          </header>
    <?php include('../_partials/data_index.php') ?>
    <table class="table table-striped table-condensed table-hover" id="tpengguna">
  <thead>
  <tr><strong>
      <th>NO.</th>
      <th>ID PENGGUNA</th>
      <th>Nama Lengkap</th>
      <th>Email</th>
      <th>Username</th>
      <th>Hak Akses</th>
    </tr>
  </thead>
  <tbody>
    <?php $nomor = 1; ?> <!-- No. Urut -->
    <?php foreach ($data_pengguna as $pengguna) : ?> <!-- No. Urut -->
    <tr>
      <td><?php echo $nomor++ ?>.</td> <!-- No. Urut -->
      <td><?php echo $pengguna['id'] ?></td>
      <td><?php echo $pengguna['nama_lengkap'] ?></td>
      <td><?php echo $pengguna['email'] ?></td>
      <td><?php echo $pengguna['uname'] ?></td>
      <td><?php echo $pengguna['level'] ?></td>
    </tr>
    <?php endforeach ?> <!-- No. Urut -->
  </tbody>
        </table>

        </div>
      </section>
      



      <script>
        $(document).ready(function(){
          $('#tpengguna').DataTable();
        });
      </script>

    </div>
    
    
    <?php include('../_partials/bottom-tables.php') ?>