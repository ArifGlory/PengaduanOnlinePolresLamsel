<!-- Content Wrapper. Contains page content -->
<?php
$nama = $this->session->userdata('nama');
$hakAkses = $this->session->userdata('hak_akses');
$no = 1;
?>
<?php
foreach ($pelapor as $b){

    $idPelapor = $b->id_user;
    $namaPelapor = $b->nama_user;
    $alamat = $b->alamat;
    $pekerjaan = $b->pekerjaan;
    $email = $b->email;
    $publish = $b->publish;

}


?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Sweetalert berhasil tambah data  -->
    <?php if ($this->session->flashdata('success')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Berhasil tambah data pelapor",
                timer: 2000,
                showConfirmButton : false,
                type : "success",
                icon: "success"
            });
        </script>
    <?php } ?>
    <?php if ($this->session->flashdata('success_update')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Berhasil mengubah data pelapor",
                timer: 2000,
                showConfirmButton : false,
                type : "success",
                icon: "success"
            });
        </script>
    <?php } ?>
    <section class="content-header">
        <h1>
            Detail pelapor
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Detail Pelapor</li>
        </ol>
        <div class="col-sm-12">

        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">

            <div class="col-md-12">

            </div>

            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url();?>/assets4/dist/img/avatar-13.png" alt="User profile picture">

                        <h3 class="profile-username text-center"><?php echo $namaPelapor;?></h3>

                        <p class="text-muted text-center"><?php echo $pekerjaan;?></p>

                        <ul class="list-group list-group-unbordered">

                        </ul>
                        <?php if ($publish == "F") { ?>
                            <a href="<?php echo base_url();?>Master/aktifkanPengguna/<?php echo $idPelapor; ?>" class="btn btn-primary btn-block"><b>Aktifkan Akun Pengguna</b></a>
                        <?php } else { ?>
                        <a href="<?php echo base_url();?>Master/nonAktifPengguna/<?php echo $idPelapor; ?>" class="btn btn-danger btn-block"><b>Non Aktifkan Pengguna</b></a>
                        <?php } ?>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Tentang Pelapor</h3>
                    </div>
                    <!-- /.box-header -->
                    <div align="center" class="box-body">
                        <strong><i class="fa fa-desktop"></i> Email</strong>

                        <p class="text-muted">
                           <?php echo $email;?>
                        </p>

                        <hr>

                        <strong><i class="fa fa-map-marker margin-r-5"></i> Alamat</strong>

                        <p class="text-muted"> <?php echo $alamat;?></p>

                        <hr>

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <h3>Data pengaduan oleh pengguna ini</h3>
                        <hr>
                        <table id="dtable2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Pengaduan</th>
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
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->


</div>
<!-- /.content-wrapper -->