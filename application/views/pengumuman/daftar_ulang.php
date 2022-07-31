<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Daftar Ulang</h3>
            </div>
            <div class="box-body">
                Untuk melakukan pendaftaran ulang klik tombol dibawah ini dan kunjungi sekolah untuk melengkapi doumen, terimakasih<br><br>
                <form action="<?php echo site_url('pengumuman/daftar_ulang') ?>" method="post">
                <input type="hidden" value="<?php echo $this->session->userdata('nis')?>" name="nis">
                    <button type="submit" class="btn btn-success">Daftar Ulang</button>
                </form>
            </div>
        </div>
    </div>
</div>