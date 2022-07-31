<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Hasil</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Benar</th>
                            <th>Salah</th>
                            <th>Nilai</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no=1; foreach($hasil as $h){ ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $h['nis']; ?></td>
                            <td><?php echo $h['benar']; ?></td>
                            <td><?php echo $h['salah']; ?></td>
                            <td><?php echo $h['nilai']; ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                                
            </div>
        </div>
    </div>
</div>
