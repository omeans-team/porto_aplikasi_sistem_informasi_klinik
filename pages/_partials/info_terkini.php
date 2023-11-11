<?php include('../../assets/config/config.php'); ?>
<?php
// mengambil data admin
$data_admin = mysqli_query($db,"SELECT * FROM admin");
// menghitung data admin
$jumlah_admin = mysqli_num_rows($data_admin);

// mengambil data dokter
$data_dokter = mysqli_query($db,"SELECT * FROM dokter");
// menghitung data dokter
$jumlah_dokter = mysqli_num_rows($data_dokter);

// mengambil data pegawai
$data_pegawai = mysqli_query($db,"SELECT * FROM pegawai");
// menghitung data pegawai
$jumlah_pegawai = mysqli_num_rows($data_pegawai);

// mengambil data pasien
$data_pasien = mysqli_query($db,"SELECT * FROM pasien");
// menghitung data pasien
$jumlah_pasien = mysqli_num_rows($data_pasien);

// mengambil data pengguna
$data_pengguna = mysqli_query($db,"SELECT * FROM pengguna");
// menghitung data pengguna
$jumlah_pengguna = mysqli_num_rows($data_pengguna);

// mengambil data transaksi
$data_transaksi = mysqli_query($db,"SELECT * FROM transaksi");
// menghitung data transaksi
$jumlah_transaksi = mysqli_num_rows($data_transaksi);

?>


      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Jumlah Administrator</strong>
                  <div class="count-number"><?php echo $jumlah_admin; ?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Jumlah Dokter</strong>
                  <div class="count-number"><?php echo $jumlah_dokter; ?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Jumlah Pegawai</strong>
                  <div class="count-number"><?php echo $jumlah_pegawai; ?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Jumlah Pasien</strong>
                  <div class="count-number"><?php echo $jumlah_pasien; ?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Total Pengguna</strong>
                  <div class="count-number"><?php echo $jumlah_pengguna; ?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-list-1"></i></div>
                <div class="name"><strong class="text-uppercase">Jumlah Transaksi</strong>
                  <div class="count-number"><?php echo $jumlah_transaksi; ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Header Section-->
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <div class="row d-flex align-items-md-stretch">
            <!-- To Do List-->
            <div class="col-lg-3 col-md-6">
              <div class="card to-do">
                <h2 class="display h4">Kota Domisili Pelanggan</h2>
                <p>Berikut ini kota asal pelanggan kami.</p>
                <ul class="check-lists list-unstyled">
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-1" name="list-1" class="form-control-custom">
                    <label for="list-1">Similique sunt in culpa qui officia</label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-2" name="list-2" class="form-control-custom">
                    <label for="list-2">Ed ut perspiciatis unde omnis iste</label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-3" name="list-3" class="form-control-custom">
                    <label for="list-3">At vero eos et accusamus et iusto </label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-4" name="list-4" class="form-control-custom">
                    <label for="list-4">Explicabo Nemo ipsam voluptatem</label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-5" name="list-5" class="form-control-custom">
                    <label for="list-5">Similique sunt in culpa qui officia</label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-6" name="list-6" class="form-control-custom">
                    <label for="list-6">At vero eos et accusamus et iusto </label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-7" name="list-7" class="form-control-custom">
                    <label for="list-7">Similique sunt in culpa qui officia</label>
                  </li>
                  <li class="d-flex align-items-center"> 
                    <input type="checkbox" id="list-8" name="list-8" class="form-control-custom">
                    <label for="list-8">Ed ut perspiciatis unde omnis iste</label>
                  </li>
                </ul>
              </div>
            </div>
            <!-- Pie Chart-->
            <div class="col-lg-3 col-md-6">
              <div class="card project-progress">
                <h2 class="display h4">Grafik Pengguna Berdasarkan Hak Akses</h2>
                <p>Berikut ini grafik pengguna yang terdaftar di klinik kami.</p>
                <div class="pie-chart">
                  <canvas id="pieChartPengguna" width="300" height="300"> </canvas>
                </div>
              </div>
            </div>
            <!-- Line Chart -->
            <div class="col-lg-6 col-md-12 flex-lg-last flex-md-first align-self-baseline">
              <div class="card sales-report">
                <h2 class="display h4">Grafik Pelayanan Klinik</h2>
                <p>Berikut ini jumlah pelanggan klinik</p>
                <div class="line-chart">
                  <canvas id="lineCahrtT"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
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
    var ctx = document.getElementById('pieChartPengguna').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',
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


      <?php
    //Inisialisasi nilai variabel awal
    $tanggal= "";
    $jumlah=null;
    //Query SQL
    $sql="select tanggal,COUNT(*) as 'total' from transaksi GROUP BY DATE_FORMAT(tanggal, '%Y%M')";
    $hasil=mysqli_query($db,$sql);

    while ($data = mysqli_fetch_array($hasil)) {
        //Mengambil nilai tanggal dari database
        $tanggal_d=$data['tanggal'];
        $tanggal .= "'$tanggal_d'". ", ";
        //Mengambil nilai total dari database
        $jum=$data['total'];
        $jumlah .= "$jum". ", ";

    }
    ?>


        <script>
    var ctx = document.getElementById('lineCahrtT').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',
        // The data for our dataset
        data: {
            labels: [<?php echo $tanggal; ?>],
            datasets: [{
                label:'Jumlah Pelanggan Tahun 2021',
                backgroundColor: ['rgba(75,192,192,0.4)', 'rgba(75,192,192,0.4)'],
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