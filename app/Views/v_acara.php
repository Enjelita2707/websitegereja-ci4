<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Data <?= $judul ?></h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-plus"></i> Tambah
                </button>
            </div>
        </div>
        <div class="card-body">
            <?php if (session()->getFlashdata('pesan')): ?>
                <div class="alert alert-success"><?= session()->getFlashdata('pesan') ?></div>
            <?php endif; ?>
            <table class="table" id="example1">
                <thead>
                    <tr>
                        <th width="50px">No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>File</th>
                        <th>Create At</th>
                        <th>Update At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($acara as $value): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['judul'] ?></td>
                            <td><?= $value['deskripsi'] ?></td>
                            <td><?= $value['file'] ?></td>
                            <td><?= $value['created_at'] ?></td>
                            <td><?= $value['updated_at'] ?></td>
                            <td>
                                <button class="btn btn-flat btn-sm btn-warning" data-toggle="modal" data-target="#modal-edit<?= $value['id'] ?>"><i class="fas fa-pencil-alt"></i></button>
                                <button class="btn btn-flat btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete<?= $value['id'] ?>"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah -->
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
                <?= form_open_multipart('Acara/InsertData') ?>
                    <div class="form-group">
                        <label>Nama Ibadah</label>
                        <input type="text" class="form-control" name="judul">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" class="form-control" name="deskripsi">
                    </div>
                    <div class="form-group">
                        <label>File</label>
                        <input type="file" class="form-control" name="file">
                    </div>
                    <div class="form-group">
                        <label>Create At</label>
                        <input type="text" class="form-control" name="created_at">
                    </div>
                    <div class="form-group">
                        <label>Update At</label>
                        <input type="text" class="form-control" name="updated_at">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit -->
<?php foreach ($acara as $value): ?>
    <div class="modal fade" id="modal-edit<?= $value['id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Edit <?= $judul ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?= form_open_multipart('Acara/UpdateData/' . $value['id']) ?>
                        <div class="form-group">
                            <label>Nama Ibadah</label>
                            <input type="text" class="form-control" name="judul" value="<?= $value['judul'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" class="form-control" name="deskripsi" value="<?= $value['deskripsi'] ?>">
                        </div>
                        <div class="form-group">
                            <label>File</label>
                            <input type="file" class="form-control" name="file">
                        </div>
                        <div class="form-group">
                            <label>Create At</label>
                            <input type="text" class="form-control" name="created_at" value="<?= $value['created_at'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Update At</label>
                            <input type="text" class="form-control" name="updated_at" value="<?= $value['updated_at'] ?>">
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>

<!-- Modal Delete -->
<?php foreach ($acara as $value): ?>
    <div class="modal fade" id="modal-delete<?= $value['id'] ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete <?= $judul ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus data ini? <br>
                    <b><?= $value['judul'] ?></b>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a href="<?= base_url('Acara/DeleteData/' . $value['id']) ?>" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
