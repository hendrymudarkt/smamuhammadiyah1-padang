<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SMA Muhammadiyah 1 Padang</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('resources/css/material.min.css');?>">
    <link rel="stylesheet" href="<?php echo site_url('resources/css/dataTables.material.min.css');?>">
</head>

<body class="hold-transition skin-green-light sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">Pendaftar</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">Pendaftar</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo site_url('resources/img/lg.png');?>" class="user-image"
                                    alt="User Image">
                                <span class="hidden-xs"><?php echo $this->session->userdata('username'); ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo site_url('resources/img/lg.png');?>" class="img-circle"
                                        alt="User Image">

                                    <p>
                                        <?php echo $this->session->userdata('username'); ?>
                                        <small>Member since Jun. 2019</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="<?php echo site_url('login/logout') ?>"
                                            class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?php echo site_url('resources/img/lg.png');?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $this->session->userdata('username'); ?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="<?php echo site_url('dashboard/kepsek');?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('pengumuman/index2') ?>">
                            <i class="fa fa-file"></i> <span>Pengumuman</span>
                        </a>
                    </li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>SMA Muhammadiyah 1 Padang</strong>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->

            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo site_url('resources/js/jquery-2.2.3.min.js');?>"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
    <!-- FastClick -->
    <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
    <!-- DatePicker -->
    <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
    <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
    <script src="<?php echo site_url('resources/js/global.js');?>"></script>
    <script src="<?php echo site_url('resources/js/jquery.dataTables.min.js');?>"></script>
    <script src="<?php echo site_url('resources/js/dataTables.material.min.js');?>"></script>
    <script src="<?php echo site_url('resources/tinymce/tinymce.min.js');?>"></script>
    <script type="text/javascript">
        $('document').ready(function () {
            $('#myTable').DataTable({
                columnDefs: [{
                    targets: [0, 1, 2],
                    className: 'mdl-data-table__cell--non-numeric'
                }]
            });
            $('#tableUjian').DataTable({
                "searching": false,
                "order": false,
                columnDefs: [{
                    targets: [0, 1, 2],
                    className: 'mdl-data-table__cell--non-numeric'
                }]
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            /** Membuat Waktu Mulai Hitung Mundur Dengan 
             * var detik = 0,
             * var menit = 1,
             * var jam = 1
             */
            var detik = 0;
            var menit = 0;
            var jam = 2;

            /**
             * Membuat function hitung() sebagai Penghitungan Waktu
             */
            function hitung() {
                /** setTimout(hitung, 1000) digunakan untuk 
                 * mengulang atau merefresh halaman selama 1000 (1 detik) 
                 */
                setTimeout(hitung, 1000);

                /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
                if (menit < 10 && jam == 0) {
                    var peringatan = 'style="color:red"';
                };

                /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
                $('#timer').html(
                    '<p' + peringatan + '>Sisa waktu anda :' + jam + ' : ' + menit + ' : ' + detik + '</p>'
                );

                /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
                detik--;

                /** Jika var detik < 0
                 * var detik akan dikembalikan ke 59
                 * Menit akan Berkurang 1
                 */
                if (detik < 0) {
                    detik = 59;
                    menit--;

                    /** Jika menit < 0
                     * Maka menit akan dikembali ke 59
                     * Jam akan Berkurang 1
                     */
                    if (menit < 0) {
                        menit = 59;
                        jam--;

                        /** Jika var jam < 0
                         * clearInterval() Memberhentikan Interval dan submit secara otomatis
                         */
                        if (jam < 0) {
                            document.formUjian.submit();
                        }
                    }
                }
            }
            /** Menjalankan Function Hitung Waktu Mundur */
            hitung();
        });
        // ]]>
    </script>
    <!-- TinyMCE -->
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
    </script>
</body>

</html>