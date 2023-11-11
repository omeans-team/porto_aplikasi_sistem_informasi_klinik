
    <?php include('../_partials/top.php') ?>

    <!-- Side Navbar -->
    
    <?php include('../_partials/side-navbar-admin.php') ?>

    <div class="page">
      <!-- navbar-->
      
    <?php include('../_partials/navbar-header.php') ?>

      <!-- Breadcrumb-->
    <?php include('../_partials/top-breadcrumb.php') ?>

            <li class="breadcrumb-item active">Input Data Obat       </li>

    <?php include('../_partials/bottom-breadcrumb.php') ?>



      <section class="forms">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Input Data Obat</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Nama</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control">
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
      
      <!--?php include('../_partials/footer.php') ?-->

    </div>
    
    <?php include('../_partials/bottom-forms.php') ?>