<?php if($this->session->flashdata('success')){ ?>
<div class="alert alert-success">
    <a href="#" class="close" data-dismiss="alert">&times;</a>
    <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
</div>
<?php } ?>
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box box-widget">
                <div class="box-header with-border">
                    <div class="user-block">
                        <img class="img-circle" src="<?php echo site_url('resources/img/lg.png');?>" alt="User Image">
                        <span class="username"><a href="#"><?php echo $berita['judul']; ?></a></span>
                        <span class="description"><?php echo date('d-m-Y H:i', strtotime($berita['tanggal'])) ?></span>
                    </div>
                    <!-- /.user-block -->
                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                class="fa fa-times"></i></button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <img class="img-responsive pad" src="#" alt="Photo">

                    <?php echo $berita['isi'] ?>
                    <a href="<?php echo site_url('dashboard') ?>" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Kembali</a>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
</div>