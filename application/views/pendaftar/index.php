<?php if($this->session->flashdata('success')){ ?>
<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
</div>
<?php } else if($this->session->flashdata('error')){ ?>
<div class="alert alert-danger">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
</div>
<?php } else if($this->session->flashdata('warning')){ ?>
<div class="alert alert-warning">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
</div>
<?php } ?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pendaftaran</h3>
            </div>
            <div class="box-body">
                Silahkan isi form dibawah untuk melakukan pendaftaran<br>
                Syarat pendaftaran :
                <ul>
                    <li>Mengisi form wajib yaitu Nis, nama siswa, jenis kelamin, alamat, tempat lahir, tgl lahir, agama,
                        no HP, no HP orang tua, pilih file</li>
                    <li>Syarat usia untuk mendaftar adalah 15-22 tahun</li>
                </ul>
            </div>
            <div class="box-footer">
                <form method="post" enctype="multipart/form-data" action="<?php echo site_url('pendaftar/index/'.$this->session->userdata('nis')) ?>">
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama"
                            value="<?php echo $pendaftar['nama'] ?>" readonly>
                    </div>
                    <div class="form-group has-feedback">
                        <select name="jk" class="form-control" required>
                        <?php if ($pendaftar['jenis_kelamin'] != '') {?>
                            <option value="<?php echo $pendaftar['jenis_kelamin'] ?>"><?php echo $pendaftar['jenis_kelamin'] ?></option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        <?php } else {?>
                            <option value="0">Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="NISN" name="nis"
                            value="<?php echo $pendaftar['nis'] ?>" readonly>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="NIK/No KITAS (untuk WNA)" name="nik" value="<?php echo $pendaftar['nik'] ?>" <?php if ($pendaftar['nik'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" value="<?php echo $pendaftar['tempat_lahir'] ?>" <?php if ($pendaftar['tempat_lahir'] != ''){ echo "readonly"; } ?> require>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="date" class="form-control" placeholder="Tanggal Lahir" name="tgl_lahir" value="<?php echo $pendaftar['tgl_lahir'] ?>" <?php if ($pendaftar['tgl_lahir'] != ''){ echo "readonly"; } ?> require>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="No Registrasi Akta Lahir" name="no_reg" value="<?php echo $pendaftar['no_reg'] ?>" <?php if ($pendaftar['no_reg'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <select name="agama" class="form-control" require>
                        <?php if ($pendaftar['agama'] != '') {?>
                            <option value="<?php echo $pendaftar['agama'] ?>"><?php echo $pendaftar['agama'] ?></option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Kristen Katholik">Kristen Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        <?php } else {?>
                            <option value="0">Agama/Kepercayaan</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Kristen Katholik">Kristen Katholik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        <?php } ?>
                        </select>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Kewarganegaraan" name="kewarganegaraan" value="<?php echo $pendaftar['kewarganegaraan'] ?>" <?php if ($pendaftar['kewarganegaraan'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Berkebutuhan Khusus"
                            name="berkebutuhan_khusus" value="<?php echo $pendaftar['berkebutuhan_khusus'] ?>" <?php if ($pendaftar['berkebutuhan_khusus'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Alamat" name="alamat" value="<?php echo $pendaftar['alamat'] ?>" <?php if ($pendaftar['alamat'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="RT" name="rt" value="<?php echo $pendaftar['rt'] ?>" <?php if ($pendaftar['rt'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="RW" name="rw" value="<?php echo $pendaftar['rw'] ?>" <?php if ($pendaftar['rw'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Nama Dusun" name="dusun" value="<?php echo $pendaftar['dusun'] ?>" <?php if ($pendaftar['dusun'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Kelurahan" name="kelurahan" value="<?php echo $pendaftar['kelurahan'] ?>" <?php if ($pendaftar['kelurahan'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Kecamatan" name="kecamatan" value="<?php echo $pendaftar['kecamatan'] ?>" <?php if ($pendaftar['kecamatan'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Kode Pos" name="kode_pos" value="<?php echo $pendaftar['kode_pos'] ?>" <?php if ($pendaftar['kode_pos'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Lintang" name="lintang" value="<?php echo $pendaftar['lintang'] ?>" <?php if ($pendaftar['lintang'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Bujur" name="bujur" value="<?php echo $pendaftar['bujur'] ?>" <?php if ($pendaftar['bujur'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Tempat Tinggal" name="tempat_tinggal" value="<?php echo $pendaftar['tempat_tinggal'] ?>" <?php if ($pendaftar['tempat_tinggal'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Transportasi" name="transportasi" value="<?php echo $pendaftar['transportasi'] ?>" <?php if ($pendaftar['transportasi'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Nomor KKS" name="nomor_kks" value="<?php echo $pendaftar['nomor_kks'] ?>" <?php if ($pendaftar['nomor_kks'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Anak Keberapa" name="anak_keberapa" value="<?php echo $pendaftar['anak_keberapa'] ?>" <?php if ($pendaftar['anak_keberapa'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="Penerima KPS/PKH" name="penerima_kps" value="<?php echo $pendaftar['penerima_kps'] ?>" <?php if ($pendaftar['penerima_kps'] != ''){ echo "readonly"; } ?>>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="No Hp" name="no_hp" value="<?php echo $pendaftar['no_hp'] ?>" <?php if ($pendaftar['no_hp'] != ''){ echo "readonly"; } ?> require>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="text" class="form-control" placeholder="No Hp Orangtua" name="no_hp_ortu" value="<?php echo $pendaftar['no_hp_ortu'] ?>" <?php if ($pendaftar['no_hp_ortu'] != ''){ echo "readonly"; } ?> require>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="file" class="form-control" placeholder="Lampiran" name="lampiran" value="<?php echo $pendaftar['lampiran'] ?>"
                            value="Upload File">
                    </div>
                    <div class="row">
                        <center><button type="submit" name="simpan"
                                class="btn btn-primary btn-block btn-flat">Daftar</button></center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>