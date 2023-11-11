<?php include('../_partials/top.php') ?>

<?php include('../../assets/config/config.php'); ?>

<div class="container">
  <br>
  <div class="row">
    <div class="col-sm-offset-2  col-sm-8">
      <div class="panel panel-default">
        <div class="panel-heading"><b>Mari Belajar Coding - Wilayah Adminstrasi Indonesia</b></div>
        <div class="panel-body">
           <form class="form-horizontal" method="post">
              <div class="form-group">
                <label class="control-label col-sm-3">Provinsi:</label>
                <div class="col-sm-9">
                  <?php                    
                    $sql_provinsi = mysqli_query($db,"SELECT * FROM provinces ORDER BY name ASC");
                   ?>
                  <select class="form-control" name="provinsi" id="provinsi">
                    <option></option>
                    <?php                       
                        while($rs_provinsi = mysqli_fetch_assoc($sql_provinsi)){ 
                           echo '<option value="'.$rs_provinsi['id'].'">'.$rs_provinsi['name'].'</option>';
                        }                        
                      ?>
                  </select>
                  <img src="asset/img/loading.gif" width="35" id="load1" style="display:none;" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" >Kota/Kabupaten:</label>
                <div class="col-sm-9">          
                  <select class="form-control" name="kota" id="kota">
                    <option></option>
                  </select>
                  <img src="asset/img/loading.gif" width="35" id="load2" style="display:none;" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" >Kecamatan:</label>
                <div class="col-sm-9">          
                  <select class="form-control" name="kecamatan" id="kecamatan">
                    <option></option>
                  </select>
                  <img src="asset/img/loading.gif" width="35" id="load3" style="display:none;" />
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" >Kelurahan:</label>
                <div class="col-sm-9">          
                  <select class="form-control" name="kelurahan" id="kelurahan">
                    <option></option>
                  </select>
                </div>
              </div>
              <div class="form-group">        
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-default">Simpan</button>
                </div>
              </div>
            </form>
        </div>
      </div>     
    </div>
  </div>  
</div>
</body>
</html>