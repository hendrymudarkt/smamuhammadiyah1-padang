<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Hasil Listing</h3>
                <button class="btn btn-primary pull-right" name="cetak" onclick="printContent('box-body')"><i class="fa fa-print"></i> Cetak</button>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Bahasa Indonesia</th>
                            <th>Bahasa Inggris</th>
                            <th>IPA</th>
                            <th>Matematika</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($siswa as $s) { ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $s['nis']; ?></td>
                                <td><?php echo $s['nama']; ?></td>
                                <td><?php echo $this->db->get_where('kelas', array('id_kelas' => $s['id_kelas']))->row()->nama_kelas; ?></td>
                                <td align="right"><?php
                                                    $dataBI2 = $this->db->query("SELECT * FROM soal")->result_array();
                                                    foreach ($dataBI2 as $BI2) {
                                                        $jawabBI2 = $this->db->query("SELECT * FROM jawab WHERE nis = '$s[nis]' AND id_soal = '$BI2[id_soal]' AND jawab = '$BI2[jawaban]' AND jenis_soal = '1'");
                                                        @$totalBI2 += $jawabBI2->num_rows();
                                                    }
                                                    $soalBI2 = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '1'");
                                                    $jwbBI = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '1'");
                                                    $sBI2 = $soalBI2->num_rows();
                                                    $jBI2 = $jwbBI->num_rows();
                                                    if ($sBI2 == 0) {
                                                        echo 0;
                                                    } elseif ($jBI2 == 0) {
                                                        echo 0;
                                                    } else {
                                                        echo (100 / $sBI2) * $totalBI2;
                                                    }
                                                    ?></td>
                                <td align="right"><?php
                                                    $dataBE2 = $this->db->query("SELECT * FROM soal")->result_array();
                                                    foreach ($dataBE2 as $BE2) {
                                                        $jawabBE2 = $this->db->query("SELECT * FROM jawab WHERE nis = '$s[nis]' AND  id_soal = '$BE2[id_soal]' AND jawab = '$BE2[jawaban]' AND jenis_soal = '2'");
                                                        @$totalBE2 += $jawabBE2->num_rows();
                                                    }
                                                    $soalBE2 = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '2'");
                                                    $jwbBE = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '2'");
                                                    $sBE2 = $soalBE2->num_rows();
                                                    $jBE2 = $jwbBE->num_rows();
                                                    if ($sBE2 == 0) {
                                                        echo 0;
                                                    } elseif ($jBE2 == 0) {
                                                        echo 0;
                                                    } else {
                                                        echo (100 / $sBE2) * $totalBE2;
                                                    }
                                                    ?></td>
                                <td align="right"><?php
                                                    $dataIPA2 = $this->db->query("SELECT * FROM soal")->result_array();
                                                    foreach ($dataIPA2 as $IPA2) {
                                                        $jawabIPA2 = $this->db->query("SELECT * FROM jawab WHERE nis = '$s[nis]' AND  id_soal = '$IPA2[id_soal]' AND jawab = '$IPA2[jawaban]' AND jenis_soal = '3'");
                                                        @$totalIPA2 += $jawabIPA2->num_rows();
                                                    }
                                                    $soalIPA2 = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '3'");
                                                    $jwbIPA = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '3'");
                                                    $sIPA2 = $soalIPA2->num_rows();
                                                    $jIPA2 = $jwbIPA->num_rows();
                                                    if ($sIPA2 == 0) {
                                                        echo 0;
                                                    } elseif ($jIPA2 == 0) {
                                                        echo 0;
                                                    } else {
                                                        echo (100 / $sIPA2) * $totalIPA2;
                                                    }
                                                    ?></td>
                                <td align="right"><?php
                                                    $dataM2 = $this->db->query("SELECT * FROM soal")->result_array();
                                                    foreach ($dataM2 as $M2) {
                                                        $jawabM2 = $this->db->query("SELECT * FROM jawab WHERE nis = '$s[nis]' AND  id_soal = '$M2[id_soal]' AND jawab = '$M2[jawaban]' AND jenis_soal = '4'");
                                                        @$totalM2 += $jawabM2->num_rows();
                                                    }
                                                    $soalM2 = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '4'");
                                                    $jwbM = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '4'");
                                                    $sM2 = $soalM2->num_rows();
                                                    $jM2 = $jwbM->num_rows();
                                                    if ($sM2 == 0) {
                                                        echo 0;
                                                    } elseif ($jM2 == 0) {
                                                        echo 0;
                                                    } else {
                                                        echo (100 / $sM2) * $totalM2;
                                                    }
                                                    ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div id="box-body" class="invisible">
            <h4 align="center">Laporan Nilai Try Out Siswa SMP Negeri 15 Padang</h4>
            <hr>
            <table class="table table-striped table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Bahasa Indonesia</th>
                        <th>Bahasa Inggris</th>
                        <th>IPA</th>
                        <th>Matematika</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($siswa as $s) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $s['nis']; ?></td>
                            <td><?php echo $s['nama']; ?></td>
                            <td><?php echo $this->db->get_where('kelas', array('id_kelas' => $s['id_kelas']))->row()->nama_kelas; ?></td>
                            <td align="right"><?php
                                                $dataBI2Print = $this->db->query("SELECT * FROM soal")->result_array();
                                                foreach ($dataBI2Print as $BI2Print) {
                                                    $jawabBI2Print = $this->db->query("SELECT * FROM jawab WHERE nis = '$s[nis]' AND id_soal = '$BI2Print[id_soal]' AND jawab = '$BI2Print[jawaban]' AND jenis_soal = '1'");
                                                    @$totalBI2Print += $jawabBI2Print->num_rows();
                                                }
                                                $soalBI2Print = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '1'");
                                                $jwbBI = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '1'");
                                                $sBI2Print = $soalBI2Print->num_rows();
                                                $jBI2Print = $jwbBI->num_rows();
                                                if ($sBI2Print == 0) {
                                                    echo 0;
                                                } elseif ($jBI2Print == 0) {
                                                    echo 0;
                                                } else {
                                                    echo (100 / $sBI2Print) * $totalBI2Print;
                                                }
                                                ?></td>
                            <td align="right"><?php
                                                $dataBE2Print = $this->db->query("SELECT * FROM soal")->result_array();
                                                foreach ($dataBE2Print as $BE2Print) {
                                                    $jawabBE2Print = $this->db->query("SELECT * FROM jawab WHERE nis = '$s[nis]' AND  id_soal = '$BE2Print[id_soal]' AND jawab = '$BE2Print[jawaban]' AND jenis_soal = '2'");
                                                    @$totalBE2Print += $jawabBE2Print->num_rows();
                                                }
                                                $soalBE2Print = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '2'");
                                                $jwbBE = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '2'");
                                                $sBE2Print = $soalBE2Print->num_rows();
                                                $jBE2Print = $jwbBE->num_rows();
                                                if ($sBE2Print == 0) {
                                                    echo 0;
                                                } elseif ($jBE2Print == 0) {
                                                    echo 0;
                                                } else {
                                                    echo (100 / $sBE2Print) * $totalBE2Print;
                                                }
                                                ?></td>
                            <td align="right"><?php
                                                $dataIPA2Print = $this->db->query("SELECT * FROM soal")->result_array();
                                                foreach ($dataIPA2Print as $IPA2Print) {
                                                    $jawabIPA2Print = $this->db->query("SELECT * FROM jawab WHERE nis = '$s[nis]' AND  id_soal = '$IPA2Print[id_soal]' AND jawab = '$IPA2Print[jawaban]' AND jenis_soal = '3'");
                                                    @$totalIPA2Print += $jawabIPA2Print->num_rows();
                                                }
                                                $soalIPA2Print = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '3'");
                                                $jwbIPA = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '3'");
                                                $sIPA2Print = $soalIPA2Print->num_rows();
                                                $jIPA2Print = $jwbIPA->num_rows();
                                                if ($sIPA2Print == 0) {
                                                    echo 0;
                                                } elseif ($jIPA2Print == 0) {
                                                    echo 0;
                                                } else {
                                                    echo (100 / $sIPA2Print) * $totalIPA2Print;
                                                }
                                                ?></td>
                            <td align="right"><?php
                                                $dataM2Print = $this->db->query("SELECT * FROM soal")->result_array();
                                                foreach ($dataM2Print as $M2Print) {
                                                    $jawabM2Print = $this->db->query("SELECT * FROM jawab WHERE nis = '$s[nis]' AND  id_soal = '$M2Print[id_soal]' AND jawab = '$M2Print[jawaban]' AND jenis_soal = '4'");
                                                    @$totalM2Print += $jawabM2Print->num_rows();
                                                }
                                                $soalM2Print = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '4'");
                                                $jwbM = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '4'");
                                                $sM2Print = $soalM2Print->num_rows();
                                                $jM2Print = $jwbM->num_rows();
                                                if ($sM2Print == 0) {
                                                    echo 0;
                                                } elseif ($jM2Print == 0) {
                                                    echo 0;
                                                } else {
                                                    echo (100 / $sM2Print) * $totalM2Print;
                                                }
                                                ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    function printContent(el) {
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>