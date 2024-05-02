<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Data <?= $judul ?></h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-plus"></i> Tambah
                </button>
            </div>
        <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            if (session()->getFlashdata('pesan')) {
            echo '<div class="alert alert-success">';
            echo session()->getFlashdata('pesan');
            echo '</div>';
            } 
            ?>
            <table class="table" id="example1">
    <thead>
        <tr>
            <th width="50px">No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No. HP</th>
            <th>Email</th>
            <th>Tanggal Lahir</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        <?php $no = 1;
        foreach ($jemaat as $key => $value) { ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $value['nama'] ?></td>
                <td><?= $value['alamat'] ?></td>
                <td><?= $value['no_tlpn'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><?= $value['tanggal_lahir'] ?></td>
                <td><?= $value['status'] ?></td>
                <td>
                    <button class="btn btn-flat btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit<?= $value['id_nama'] ?>"><i class="fas fa-pencil-alt"></i></button>
                    <button class="btn btn-flat btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete<?= $value['id_nama'] ?>"><i class="fas fa-trash"></i></button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

      <!-- /.modal-tambah -->
<div class="modal fade" id="modal-tambah">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah <?= $judul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('Jemaat/InsertData') ?> 

                <div class="form-group">
                    <label>Nama Jemaat</label>
                    <input type="text" class="form-control" name="nama">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>

                <div class="form-group">
                    <label>No. HP</label>
                    <input type="text" class="form-control" name="no_tlpn">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" name="status">
                </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>

            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

     <!-- /.modal-edit -->
     <?php foreach ($jemaat as $key => $value) { ?>
     <div class="modal fade" id="modal-edit<?= $value['id_nama'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit <?= $judul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <?php echo form_open('Jemaat/UpdateData/' . $value['id_nama']) ?> 

                <div class="form-group">
                    <label>Nama Jemaat</label>
                    <input type="text" class="form-control" name="nama">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" class="form-control" name="alamat">
                </div>

                <div class="form-group">
                    <label>No. HP</label>
                    <input type="text" class="form-control" name="no_tlpn">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email">
                </div>

                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" class="form-control" name="tanggal_lahir">
                </div>

                <div class="form-group">
                    <label>Status</label>
                    <input type="text" class="form-control" name="status">
                </div>

            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>

            <?php echo form_close() ?>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

     <!-- /.modal-delete -->
      <div class="modal fade" id="modal-delete<?= $value['id_nama'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete <?= $judul ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                Apakah Ingin Hapus Data? <br>
                <b> <?= $value['nama']?> </b>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <a href="<?= base_url('Jemaat/DeleteData/' . $value['id_nama']) ?>" class="btn btn-danger">Delete </a></button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <?php } ?>


      
      