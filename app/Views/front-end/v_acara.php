<div class="col-md-12">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Data <?= $judul ?></h3>
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
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($acara as $value): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $value['judul'] ?></td>
                            <td><?= $value['deskripsi'] ?></td>
                            <td><a href="<?= base_url('file/' . $value['file']) ?>" download><?= $value['file'] ?></a></td>
                            <td><?= $value['created_at'] ?></td>
                            <td><?= $value['updated_at'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
