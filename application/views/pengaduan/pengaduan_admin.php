<!-- Content Wrapper. Contains page content -->
<?php
$nama = $this->session->userdata('nama');
$hakAkses = $this->session->userdata('hak_akses');
$no = 1;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Sweetalert berhasil tambah data  -->
    <?php if ($this->session->flashdata('success_update')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Berhasil ubah data pengaduan",
                timer: 2000,
                showConfirmButton : false,
                type : "success",
                icon: "success"
            });
        </script>
    <?php } ?>
    <section class="content-header">
        <h1>
            Data pengaduan
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Pengaduan Masyarakat</li>
        </ol>
        <div class="col-sm-12">

        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">

            <div class="col-md-12">
                <a href="<?php echo base_url();?>Master/getPengaduanBaru" class="btn btn-app">
                    <span class="badge bg-yellow"><?php cetak($jmlBaru); ?></span>
                    <i class="fa fa-bullhorn"></i> Baru
                </a>
                <a href="<?php echo base_url();?>Master/getPengaduanProses" class="btn btn-app">
                    <span class="badge bg-green"><?php cetak($jmlProses); ?></span>
                    <i class="fa fa-angle-right"></i> Proses
                </a>
                <a href="<?php echo base_url();?>Master/getPengaduanSelesai" class="btn btn-app">
                    <span class="badge bg-aqua"><?php cetak($jmlSelesai); ?></span>
                    <i class="fa fa-check"></i> Selesai
                </a>
                <a href="<?php echo base_url();?>Master/pengaduan" class="btn btn-app">
                    <span class="badge bg-aqua"><?php cetak($jmlSemua); ?></span>
                    <i class="fa fa-bars"></i> Semua Pengaduan
                </a>
            </div>

            <div class="col-xs-12">
                <br>
                <div class="box">

                    <div class="box-body">
                        <table id="dtable2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Pengaduan</th>
                                <th>Nama Pelapor</th>
                                <th>Kejahatan</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($pengaduan as $b){ ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $b->kode_pengaduan; ?></td>
                                <td><?php echo $b->nama_user; ?></td>
                                <td><?php echo $b->nama_pengaduan; ?></td>
                                <td> <?php echo date("d-F-Y",strtotime($b->tanggal)); ?></td>
                                <td align="center">
                                    <a class="btn bg-maroon btn-sm " href="<?php echo base_url();?>Master/detailPengaduan/<?php echo $b->id_pengaduan; ?>" >
                                        <i class="fa fa-arrow-circle-right"></i> Tanggapi</a>
                                </td>
                            </tr>
                            <?php } ?>
                            <tfooter>

                            </tfooter>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->


</div>
<!-- /.content-wrapper -->