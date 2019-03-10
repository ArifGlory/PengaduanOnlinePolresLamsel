<!-- Content Wrapper. Contains page content -->
<?php
$nama = $this->session->userdata('nama');
$hakAkses = $this->session->userdata('hak_akses');
$cekvariabel = "aman";


?>

<div class="content-wrapper">


    <div class="content">
        <div class="row">
            <!-- info window jumlah aspirasi,saran,opd,user -->

           <!-- <div class="col-md-12">
                <div class="box">
                    <?php /*echo $cekvariabel;*/?>
                </div>
            </div>-->

            <div class="col-md-12">

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-aqua">
                        <span class="info-box-icon"><i class="fa fa-comment-o"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Semua Pengaduan</span>
                            <span class="info-box-number">2</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                    Lihat Lainnya
                  </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="fa fa-bell"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Pengaduan Baru</span>
                            <span class="info-box-number">3</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                            <span class="progress-description">
                    Lihat Lainnya
                  </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-yellow">
                        <span class="info-box-icon"><i class="fa fa-bank"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Ditangani</span>
                            <span class="info-box-number">4</span>

                            <div class="progress">
                                <div class="progress-bar" style="width: 100%"></div>
                            </div>
                            <span class="progress-description">
                    Lihat Lainnya
                  </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

            </div>
            <!-- end info window -->
        </div>

        <div class="col-md-12">

            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Pengaduan Online - POLRES Lampung Selatan</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>

                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="<?php echo base_url();?>/foto/polisirame.jpg" height="400" width="100%" alt="logo">
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- ./box-body -->
                <div class="box-footer">
                    <div class="row">

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- /.box -->

        </div>

    </div>


</div>


<!-- /.content-wrapper -->

