<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Hasil Analisa Listing</h3>
            </div>
            <div class="box-body">
                <table class="table table-striped table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Soal</th>
                            <th>Soal</th>
                            <th>Persentasi</th>
                            <th>Tingkatan Soal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($soal as $s) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php if ($s['jenis_soal'] == 1) {
                                        echo "Bahasa Indonesia";
                                    } elseif ($s['jenis_soal'] == 2) {
                                        echo "Bahasa Inggris";
                                    } elseif ($s['jenis_soal'] == 3) {
                                        echo "IPA";
                                    } elseif ($s['jenis_soal'] == 4) {
                                        echo "Matematika";
                                    } ?></td>
                                <td><?php echo $s['soal']; ?></td>
                                <td><?php
                                    $jawabBI = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$s[id_soal]' AND jawab = '$s[jawaban]' AND jenis_soal = '$s[jenis_soal]'");
                                    $totalBI = $jawabBI->num_rows();
                                    $soalBI = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '$s[jenis_soal]'");
                                    $jawabBI = $this->db->query("SELECT * FROM jawab WHERE id_soal =  '$s[id_soal]' AND jenis_soal = '$s[jenis_soal]'");
                                    $sBI = $soalBI->num_rows();
                                    $jBI = $jawabBI->num_rows();
                                    if ($sBI == 0) {
                                        $persentase = 0;
                                        echo $persentase . "% Siswa menjawab benar";
                                    } elseif ($jBI == 0) {
                                        $persentase = 0;
                                        echo $persentase . "% Siswa menjawab benar";
                                    } else {
                                        $persentase = ($totalBI / $sBI) * 100;
                                        echo number_format($persentase, 2) . "% Siswa menjawab benar";
                                    }
                                    ?></td>
                                <td><?php
                                    if ($persentase < 50) {
                                        echo "Sulit";
                                    } elseif ($persentase >= 50 && $persentase < 70) {
                                        echo "Sedang";
                                    } else {
                                        echo "Mudah";
                                    }
                                    ?></td>
                            </tr>
                        <?php } ?>
                        <!-- <tr>
                                <td>2</td>
                                <td>Bahasa Inggris</td>
                                <td><?php $databe = $this->db->query("SELECT jenis_soal FROM soal WHERE jenis_soal = '2'");
                                    echo $databe->num_rows(); ?></td>
                                <td><?php
                                    $dataBE = $this->db->query("SELECT * FROM soal")->result_array();
                                    foreach ($dataBE as $BE) {
                                        $jawabBE = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$BE[id_soal]' AND jawab = '$BE[jawaban]' AND jenis_soal = '2'");
                                        @$totalBE += $jawabBE->num_rows();
                                    }
                                    $soalBE = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '2'");
                                    $jawabBE = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '2'");
                                    $sBE = $soalBE->num_rows();
                                    $jBE = $jawabBE->num_rows();
                                    if ($sBE == 0) {
                                        $persentase2 = 0;
                                        echo $persentase2 . "% Siswa menjawab benar";
                                    } elseif ($jBE == 0) {
                                        $persentase2 = 0;
                                        echo $persentase2 . "% Siswa menjawab benar";
                                    } else {
                                        $persentase2 = ($totalBE / $databe->num_rows()) * 100;
                                        echo $persentase2 . "% Siswa menjawab benar";
                                    }
                                    ?></td>
                                <td><?php
                                    if ($persentase2 < 50) {
                                        echo "Sulit";
                                    } elseif ($persentase2 >= 50 && $persentase2 < 70) {
                                        echo "Sedang";
                                    } else {
                                        echo "Mudah";
                                    }
                                    ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>IPA</td>
                                <td><?php $dataIPA = $this->db->query("SELECT jenis_soal FROM soal WHERE jenis_soal = '3'");
                                    echo $dataIPA->num_rows(); ?></td>
                                <td><?php
                                    $dataIPA = $this->db->query("SELECT * FROM soal")->result_array();
                                    foreach ($dataIPA as $IPA) {
                                        $jawabIPA = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$IPA[id_soal]' AND jawab = '$IPA[jawaban]' AND jenis_soal = '3'");
                                        @$totalIPA += $jawabIPA->num_rows();
                                    }
                                    $soalIPA = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '3'");
                                    $jawabIPA = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '3'");
                                    $sIPA = $soalIPA->num_rows();
                                    $jIPA = $jawabIPA->num_rows();
                                    if ($sIPA == 0) {
                                        $persentase3 = 0;
                                        echo $persentase3 . "% Siswa menjawab benar";
                                    } elseif ($jIPA == 0) {
                                        $persentase3 = 0;
                                        echo $persentase3 . "% Siswa menjawab benar";
                                    } else {
                                        $persentase3 = ($totalIPA / $dataIPA->num_rows()) * 100;
                                        echo $persentase3 . "% Siswa menjawab benar";
                                    }
                                    ?></td>
                                <td><?php
                                    if ($persentase3 < 50) {
                                        echo "Sulit";
                                    } elseif ($persentase3 >= 50 && $persentase3 < 70) {
                                        echo "Sedang";
                                    } else {
                                        echo "Mudah";
                                    }
                                    ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Matematika</td>
                                <td><?php $dataM = $this->db->query("SELECT jenis_soal FROM soal WHERE jenis_soal = '4'");
                                    echo $dataM->num_rows(); ?></td>
                                <td><?php
                                    $dataM = $this->db->query("SELECT * FROM soal")->result_array();
                                    foreach ($dataM as $M) {
                                        $jawabM = $this->db->query("SELECT * FROM jawab WHERE id_soal = '$M[id_soal]' AND jawab = '$M[jawaban]' AND jenis_soal = '4'");
                                        @$totalM += $jawabM->num_rows();
                                    }
                                    $soalM = $this->db->query("SELECT * FROM soal WHERE jenis_soal = '4'");
                                    $jawabM = $this->db->query("SELECT * FROM jawab WHERE jenis_soal = '4'");
                                    $sM = $soalM->num_rows();
                                    $jM = $jawabM->num_rows();
                                    if ($sM == 0) {
                                        $persentase4 = 0;
                                        echo $persentase4 . "% Siswa menjawab benar";
                                    } elseif ($jM == 0) {
                                        $persentase4 = 0;
                                        echo $persentase4 . "% Siswa menjawab benar";
                                    } else {
                                        $persentase4 = ($totalM / $dataM->num_rows()) * 100;
                                        echo $persentase4 . "% Siswa menjawab benar";
                                    }
                                    ?></td>
                                <td><?php
                                    if ($persentase4 < 50) {
                                        echo "Sulit";
                                    } elseif ($persentase4 >= 50 && $persentase4 < 70) {
                                        echo "Sedang";
                                    } else {
                                        echo "Mudah";
                                    }
                                    ?></td>
                            </tr> -->
                    </tbody>
                </table>
            </div>
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