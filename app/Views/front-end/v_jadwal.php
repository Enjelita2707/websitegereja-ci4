<div class="col-md-12">
    <div class="card card-success card-outline">
        <div class="card-header">

        
        <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <div class="row">

        <?php foreach ($jadwal as $key => $value) { ?>
            <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box">
              <span class="info-box-icon"><i class="fas fa-bullhorn text-success fa-2x"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Ibadah</span>
                <span class="info-box-number"><?= $value['nama_ibadah'] ?></span>

                <div class="progress">
                  <div class="progress-bar" style="width: 0%"></div>
                </div>
                <span class="progress-description">
                    <i class="fas fa-clock text-success"></i>  <?= $value['jam'] ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>    
                    
        <?php } ?>
        </div>
                    
                    
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>