<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pengumuman Siswa yang Diterima di SMA Muhammadiyah 1 Padang Tahun <?php echo date('Y') ?></h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS Lama</th>
                            <th>NIS Baru</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($pengumuman as $s) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $s['nis']; ?></td>
                                <td><?php echo $s['nisn']; ?></td>
                                <td><?php echo $s['nama']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>