<div class="col-md-24">
    <div class="card card-success">
        <div class="card-header">
            <h3 class="card-title">Data <?= $judul ?> HKBP EBENEZER Silaen</h3>
        <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">

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
                
            </tr>
        <?php } ?>
    </tbody>
</table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
