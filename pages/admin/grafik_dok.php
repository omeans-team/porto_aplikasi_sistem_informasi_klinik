
    <?php include('../_partials/top.php') ?>

<!-- Side Navbar -->
<?php include('../_partials/side-navbar-admin.php') ?>

<div class="page">
  <!-- navbar-->
<?php include('../_partials/navbar-header.php') ?>

  <!-- Breadcrumb-->
<?php include('../_partials/top-breadcrumb.php') ?>
        <li class="breadcrumb-item active">Charts       </li>
        

<?php include('../_partials/bottom-breadcrumb.php') ?>


  <section class="charts">
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class="h3 display">Daftar Grafik</h1>
      </header>
      <div class="row">
        <div class="col-lg-6">
          <div class="card bar-chart-example">
            <div class="card-header d-flex align-items-center">
              <h4>Grafik Pasien Berdasarkan Jenis Kelamin</h4>
            </div>
            <div class="card-body">
              <div class="chart-container">
                <canvas id="pasienChart"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card bar-chart-example">
            <div class="card-header d-flex align-items-center">
              <h4>Jumlah Pengguna Berdasarkan Hak Akses</h4>
            </div>
            <div class="card-body">
              <div class="chart-container">
                <canvas id="barChartPasien"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card bar-chart-example">
            <div class="card-header d-flex align-items-center">
              <h4>Jumlah Pengguna Berdasarkan Hak Akses</h4>
            </div>
            <div class="card-body">
              <div class="chart-container">
                <canvas id="lineChartPengguna"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card bar-chart-example">
            <div class="card-header d-flex align-items-center">
              <h4>Jumlah Obat Berdasarkan Jenis</h4>
            </div>
            <div class="card-body">
              <div class="chart-container">
                <canvas id="doughnutChartObat"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card bar-chart-example">
            <div class="card-header d-flex align-items-center">
              <h4>Jumlah Pengguna Berdasarkan Hak Akses</h4>
            </div>
            <div class="card-body">
              <div class="chart-container">
                <canvas id="polarChartPengguna"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card bar-chart-example">
            <div class="card-header d-flex align-items-center">
              <h4>Jumlah Pengguna Berdasarkan Hak Akses</h4>
            </div>
            <div class="card-body">
              <div class="chart-container">
                <canvas id="radarChartPengguna"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





<!--Grafik pasien-->
<!--Grafik pasien-->
<!--Grafik pasien-->
<!--Grafik pasien-->
        <?php include "koneksi_data.php";?>
        <?php
    //Inisialisasi nilai variabel awal
    $jenis_kelamin= "";
    $jumlah=null;
    //Query SQL
    $sql="select jenis_kelamin,COUNT(*) as 'total' from pasien GROUP by jenis_kelamin";
    $hasil=mysqli_query($conn,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
        //Mengambil nilai jenis_kelamin dari database
        $jk_d=$data['jenis_kelamin'];
        $jenis_kelamin .= "'$jk_d'". ", ";
        //Mengambil nilai total dari database
        $jum=$data['total'];
        $jumlah .= "$jum". ", ";

    }
    ?>


        <script>
    var ctx = document.getElementById('pasienChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',
        // The data for our dataset
        data: {
            labels: [<?php echo $jenis_kelamin; ?>],
            datasets: [{
                label:'Data Jenis Kelamin Pasien ',
                backgroundColor: ['rgba(56, 86, 255, 0.87)', 'rgb(255, 99, 132)'],
                borderColor: ['rgba(56, 86, 255, 0.87)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<!--Grafik pasien-->
<!--Grafik pasien-->
<!--Grafik pasien-->
<!--Grafik pasien-->






<!--Grafik pasien-->
<!--Grafik pasien-->
<!--Grafik pasien-->
<!--Grafik pasien-->
<?php
    //Inisialisasi nilai variabel awal
    $umur= "";
    $jumlah=null;
    //Query SQL
    $sql="select umur,COUNT(*) as 'total' from pasien GROUP by umur";
    $hasil=mysqli_query($db,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
        //Mengambil nilai umur dari database
        $umur_d=$data['umur'];
        $umur .= "'$umur_d'". ", ";
        //Mengambil nilai total dari database
        $jum=$data['total'];
        $jumlah .= "$jum". ", ";

    }
    ?>


        <script>
    var ctx = document.getElementById('barChartPasien').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $umur; ?>],
            datasets: [{
                label:'Jumlah Data Pengguna ',
                backgroundColor: ['yellow', '#e47909', 'rgba(56, 86, 255, 0.87)', 'rgb(255, 99, 132)'],
                borderColor: ['rgba(56, 86, 255, 0.87)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<!--Grafik pasien-->
<!--Grafik pasien-->
<!--Grafik pasien-->
<!--Grafik pengguna-->

 






<!--Grafik pengguna-->
<!--Grafik pengguna-->
<!--Grafik pengguna-->
<!--Grafik pengguna-->
<?php
    //Inisialisasi nilai variabel awal
    $level= "";
    $jumlah=null;
    //Query SQL
    $sql="select level,COUNT(*) as 'total' from pengguna GROUP by level";
    $hasil=mysqli_query($db,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
        //Mengambil nilai level dari database
        $level_d=$data['level'];
        $level .= "'$level_d'". ", ";
        //Mengambil nilai total dari database
        $jum=$data['total'];
        $jumlah .= "$jum". ", ";

    }
    ?>


        <script>
    var ctx = document.getElementById('lineChartPengguna').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',
        // The data for our dataset
        data: {
            labels: [<?php echo $level; ?>],
            datasets: [{
                label:'Jumlah Data Pengguna ',
                backgroundColor: ['rgba(40, 86, 200, 0.47)', 'rgb(25, 99, 12)', 'rgba(56, 86, 255, 0.87)', 'rgb(255, 99, 132)'],
                borderColor: ['rgba(56, 86, 255, 0.87)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<!--Grafik pengguna-->
<!--Grafik pengguna-->
<!--Grafik pengguna-->
<!--Grafik pengguna-->





<!--Grafik obat-->
<!--Grafik obat-->
<!--Grafik obat-->
<!--Grafik obat-->
<?php
    //Inisialisasi nilai variabel awal
    $jenis_obat= "";
    $jumlah=null;
    //Query SQL
    $sql="select jenis_obat,COUNT(*) as 'total' from obat GROUP by jenis_obat";
    $hasil=mysqli_query($db,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
        //Mengambil nilai jenis_obat dari database
        $jenis_obat_d=$data['jenis_obat'];
        $jenis_obat .= "'$jenis_obat_d'". ", ";
        //Mengambil nilai total dari database
        $jum=$data['total'];
        $jumlah .= "$jum". ", ";

    }
    ?>


        <script>
    var ctx = document.getElementById('doughnutChartObat').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'doughnut',
        // The data for our dataset
        data: {
            labels: [<?php echo $jenis_obat; ?>],
            datasets: [{
                label:'Jumlah Data Obat ',
                backgroundColor: ['yellow', '#e47909', 'rgba(56, 86, 255, 0.87)', 'rgb(255, 99, 132)'],
                borderColor: ['rgba(56, 86, 255, 0.87)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<!--Grafik obat-->
<!--Grafik obat-->
<!--Grafik obat-->
<!--Grafik obat-->




<!--Grafik obat-->
<!--Grafik obat-->
<!--Grafik obat-->
<!--Grafik obat-->
<?php
    //Inisialisasi nilai variabel awal
    $level= "";
    $jumlah=null;
    //Query SQL
    $sql="select level,COUNT(*) as 'total' from pengguna GROUP by level";
    $hasil=mysqli_query($db,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
        //Mengambil nilai level dari database
        $level_d=$data['level'];
        $level .= "'$level_d'". ", ";
        //Mengambil nilai total dari database
        $jum=$data['total'];
        $jumlah .= "$jum". ", ";

    }
    ?>


        <script>
    var ctx = document.getElementById('polarChartPengguna').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'polarArea',
        // The data for our dataset
        data: {
            labels: [<?php echo $level; ?>],
            datasets: [{
                label:'Jumlah Data Pengguna ',
                backgroundColor: ['yellow', '#e47909', 'rgba(56, 86, 255, 0.87)', 'rgb(255, 99, 132)'],
                borderColor: ['rgba(56, 86, 255, 0.87)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<!--Grafik pengguna-->
<!--Grafik pengguna-->
<!--Grafik pengguna-->
<!--Grafik pengguna-->








<!--Grafik pengguna-->
<!--Grafik pengguna-->
<!--Grafik pengguna-->
<!--Grafik pengguna-->
<?php
    //Inisialisasi nilai variabel awal
    $level= "";
    $jumlah=null;
    //Query SQL
    $sql="select level,COUNT(*) as 'total' from pengguna GROUP by level";
    $hasil=mysqli_query($db,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
        //Mengambil nilai level dari database
        $level_d=$data['level'];
        $level .= "'$level_d'". ", ";
        //Mengambil nilai total dari database
        $jum=$data['total'];
        $jumlah .= "$jum". ", ";

    }
    ?>


        <script>
    var ctx = document.getElementById('radarChartPengguna').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'radar',
        // The data for our dataset
        data: {
            labels: [<?php echo $level; ?>],
            datasets: [{
                label:'Jumlah Data Pengguna ',
                backgroundColor: ['rgba(40, 86, 200, 0.47)', 'rgb(25, 99, 12)', 'rgba(56, 86, 255, 0.87)', 'rgb(255, 99, 132)'],
                borderColor: ['rgba(56, 86, 255, 0.87)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<!--Grafik pengguna-->
<!--Grafik pengguna-->
<!--Grafik pengguna-->
<!--Grafik pengguna-->




</div>

<?php include('../_partials/bottom-charts.php') ?>