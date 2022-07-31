<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ujian</h3>
            </div>
            <div class="box-body">
                <?php
                // notifikasi
                if ($this->session->flashdata('sukses')) {
                    echo "<div class='alert alert-dismissable' style='background:#CCFFBD'>";
                    echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo "<p><b><i class='icon fa fa-check'></i> Suksess..!</b></p>";
                    echo $this->session->flashdata('sukses');
                    echo "</div>";
                }
                if ($this->session->flashdata('gagal')) {
                    echo "<div class='alert alert-dismissable' style='background:#F5D1C4'>";
                    echo '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
                    echo "<p><b><i class='icon fa fa-ban'></i> Gagal..!</b></p>";
                    echo $this->session->flashdata('gagal');
                    echo "</div>";
                }
                ?>
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Mata Pelajaran</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">1</td>
                            <td>Bahasa Indonesia</td>
                            <td><?php
                                $nis = $this->session->userdata('nis');
                                $data = $this->db->query("SELECT nis, jenis_soal FROM jawab WHERE nis = '$nis' AND jenis_soal = '1'")->row();
                                if ($data != '') {
                                    echo "Selesai";
                                } else {
                                    $cek = $this->db->query("SELECT * FROM jadwal WHERE jenis_soal = '1'")->row_array();
                                    if ($cek['status'] == 1) {
                                        ?><a href="<?php echo site_url('ujian/add/1'); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Kerjakan</a> </td>
                                <?php } else {
                                    echo "-";
                                }
                            } ?>
                        </tr>
                        <tr>
                            <td align="center">2</td>
                            <td>Bahasa Inggris</td>
                            <td><?php
                                $nis = $this->session->userdata('nis');
                                $data = $this->db->query("SELECT nis, jenis_soal FROM jawab WHERE nis = '$nis' AND jenis_soal = '2'")->row();
                                if ($data != '') {
                                    echo "Selesai";
                                } else {
                                    $cek = $this->db->query("SELECT * FROM jadwal WHERE jenis_soal = '2'")->row_array();
                                    if ($cek['status'] == 1) {
                                        ?><a href="<?php echo site_url('ujian/add/2'); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Kerjakan</a> </td>
                                <?php } else {
                                    echo "-";
                                }
                            } ?>
                        </tr>
                        <tr>
                            <td align="center">3</td>
                            <td>IPA</td>
                            <td><?php
                                $nis = $this->session->userdata('nis');
                                $data = $this->db->query("SELECT nis, jenis_soal FROM jawab WHERE nis = '$nis' AND jenis_soal = '3'")->row();
                                if ($data != '') {
                                    echo "Selesai";
                                } else {
                                    $cek = $this->db->query("SELECT * FROM jadwal WHERE jenis_soal = '3'")->row_array();
                                    if ($cek['status'] == 1) {
                                        ?><a href="<?php echo site_url('ujian/add/3'); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Kerjakan</a> </td>
                                <?php } else {
                                    echo "-";
                                }
                            } ?>
                        </tr>
                        <tr>
                            <td align="center">4</td>
                            <td>Matematika</td>
                            <td><?php
                                $nis = $this->session->userdata('nis');
                                $data = $this->db->query("SELECT nis, jenis_soal FROM jawab WHERE nis = '$nis' AND jenis_soal = '4'")->row();
                                if ($data != '') {
                                    echo "Selesai";
                                } else {
                                    $cek = $this->db->query("SELECT * FROM jadwal WHERE jenis_soal = '4'")->row_array();
                                    if ($cek['status'] == 1) {
                                        ?><a href="<?php echo site_url('ujian/add/4'); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Kerjakan</a> </td>
                                <?php } else {
                                    echo "-";
                                }
                            } ?>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>