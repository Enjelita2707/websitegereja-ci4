<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title"><?= $judul ?></h3>
        </div>

        <!-- /.card-header -->
        <div class="card-body">
            <?php 
            if (session()->getFlashdata('pesan')) {
                echo '<div class="alert alert-success">';
                echo session()->getFlashdata('pesan');
                echo '</div>';
              }
            
            echo form_open('Admin/UpdateSetting') ?>
            <div class="form-group">
                <label>Nama Gereja</label>
                <input name="nama_gereja" value="<?= $setting['nama_gereja'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Kecamatan</label>
                <input name="kecamatan" value="<?= $setting['kecamatan'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input name="alamat" value="<?= $setting['alamat'] ?>" class="form-control">
            </div>

            <button class="btn btn-success">Simpan</button>
            <?php echo form_close() ?>
        </div>
    </div>
</div>