<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Jadwal Listing</h3>
                <div class="box-tools">
                    <a href="<?php echo site_url('jadwal/add'); ?>" class="btn btn-success btn-sm">Add</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jadwal</th>
                            <th>Jenis Soal</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($jadwal as $s) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $s['jadwal']; ?></td>
                                <td><?php if ($s['jenis_soal'] == 1) {
                                        echo "Bahasa Indonesia";
                                    } elseif ($s['jenis_soal'] == 2) {
                                        echo "Bahasa Inggris";
                                    } elseif ($s['jenis_soal'] == 3) {
                                        echo "IPA";
                                    } elseif ($s['jenis_soal'] == 4) {
                                        echo "Matematika";
                                    } ?></td>
                                <td><?php if ($s['status'] == 1) {
                                        echo "Aktif";
                                    } else {
                                        echo "Nonaktif";
                                    } ?></td>
                                <td align="center">
                                    <a href="<?php echo site_url('jadwal/edit/' . $s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a>
                                    <a href="<?php echo site_url('jadwal/remove/' . $s['id']); ?>" onclick="javascriuser: return confirm('Anda yakin untuk hapus data ini?')" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                                    <?php if ($s['status'] == 1) { ?>
                                        <a href="<?php echo site_url('jadwal/confirm/' . $s['id']); ?>" class="btn btn-default btn-xs"><span class="fa fa-close"></span> Nonaktifkan</a>
                                    <?php } else { ?>
                                        <a href="<?php echo site_url('jadwal/confirm/' . $s['id']); ?>" class="btn btn-default btn-xs"><span class="fa fa-check"></span> Aktifkan</a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>