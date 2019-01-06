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
                    <h3 class="box-title">Statistik Pengaduan Bulanan</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>

                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-center">
                                <strong>Data Pengaduan di Polres Lampung Selatan</strong>
                            </p>

                                <!-- Sales Chart Canvas -->
                                <canvas id="bar-chart" style="height: 180px; width: 703px;" height="180" width="703"></canvas>
                            <!-- /.chart-responsive -->
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

        <div class="col-md-6">

            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title"></h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item">
                                <img src="http://placehold.it/900x500/39CCCC/ffffff&amp;text=Jangan+Lupa+Logout" alt="First slide">

                                <div class="carousel-caption">
                                    First Slide
                                </div>
                            </div>
                            <div class="item active">
                                <img src="<?php echo base_url();?>/foto/indopolice1.jpg" alt="Second slide">

                                <div class="carousel-caption">
                                    Second Slide
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="fa fa-angle-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </div>

        <div class="col-md-6">

        </div>
    </div>


</div>


<!-- /.content-wrapper -->

