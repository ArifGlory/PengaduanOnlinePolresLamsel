<!-- Content Wrapper. Contains page content -->
<?php
$nama = $this->session->userdata('nama');
$hakAkses = $this->session->userdata('hak_akses');
$no = 1;
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Sweetalert berhasil tambah data  -->
    <?php if ($this->session->flashdata('success')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Berhasil tambah data admin",
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
                text: "Berhasil Nonaktifkan Akun",
                timer: 2000,
                showConfirmButton : false,
                type : "success",
                icon: "success"
            });
        </script>
    <?php } ?>
    <?php if ($this->session->flashdata('success_active')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Akun berhasil Diaktifkan",
                timer: 2000,
                showConfirmButton : false,
                type : "success",
                icon: "success"
            });
        </script>
    <?php } ?>
    <?php if ($this->session->flashdata('error_pass')){ ?>
        <script>
            swal({
                title: "Error",
                text: "Konfirmasi Passwod tidak valid",
                showConfirmButton : true,
                type : "error",
                icon: "error"
            });
        </script>
    <?php } ?>

    <section class="content-header">
        <h1>
            Data Admin Pengaduan
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Master Admin Pengaduan</li>
        </ol>
        <div class="col-sm-12">
            <br>
            <a class="btn bg-olive" href="" data-toggle="modal" data-target="#modalAdd">
                <i class="fa fa-plus"></i> Tambah Admin Pengaduan</a>
            <br>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">

            <div class="col-xs-12">
                <br>
                <div class="box">

                    <div class="box-body">
                        <table id="dtable2" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($admin as $b){
                                $status = $b->status;
                                if ($status == "T"){
                                    $status = "Aktif";
                                }else{
                                    $status = "Tidak Aktif";
                                }

                                $jabatan = $b->hak_akses;
                                if ($jabatan == "SPKT"){
                                    $namaJabatan = "Admin SPKT";
                                }else if ($jabatan == "S") {
                                    $namaJabatan = "Super Admin";
                                }else if ($jabatan == "KSR") {
                                    $namaJabatan = "Kasat Reskrim";
                                }else if ($jabatan == "SR") {
                                    $namaJabatan = "Sat Reskrim";
                                }

                                ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $b->nama; ?></td>
                                <td><?php echo $namaJabatan; ?></td>
                                <td><?php echo $status; ?></td>
                                <td align="center">
                                    <?php if ($b->hak_akses != "S" && $status == "Aktif")  {
                                        ?>

                                        <a class="btn bg-maroon btn-sm"  type="submit"
                                           href="<?php echo base_url();?>SuperAdmin/akunAdmin_nonAktif/<?php echo $b->id_admin; ?>">
                                            <i class="fa fa-edit"></i>Non Aktifkan</a>
                                    <?php
                                    }else if ($status == "Tidak Aktif") { ?>
                                        <a class="btn bg-olive btn-sm "  type="submit"
                                           href="<?php echo base_url();?>SuperAdmin/akunAdmin_aktif/<?php echo $b->id_admin; ?>">
                                            <i class="fa fa-edit"></i>Aktifkan</a>
                                    <?php } ?>

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


    <!-- start modal -->
   <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">TAMBAH DATA Admin Pengaduan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url(); ?>SuperAdmin/akunAdmin_simpan" method="post">
                    <div class="modal-body">

                        <script>
                            function hanyaAngka(evt) {
                                var charCode = (evt.which) ? evt.which : event.keyCode
                                if (charCode > 31 && (charCode < 48 || charCode > 57))

                                    return false;
                                return true;
                            }
                        </script>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Admin</label>
                                    <input type="text" maxlength="40" class="form-control" name="nama_admin" required>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" maxlength="40" class="form-control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" maxlength="40" class="form-control" name="password" required>
                                </div>
                                <div class="form-group">
                                    <label>Re Enter Password</label>
                                    <input type="password" maxlength="40" class="form-control" name="password_confirm" required>
                                </div>
                                <div class="form-group">
                                    <label class="bmd-label-floating">Jabatan</label>
                                    <select class="form-control" name="jabatan" required>
                                      <option value="SR">Sat Reskrim</option>
                                        <option value="SPKT">Admin SPKT</option>
                                        <option value="KSR">Kasat Reskrim</option>
                                    </select>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="modal-footer">
                        <a class="btn" data-dismiss="modal">
                            <i class="fa fa-reply"></i> Batal</a>
                        <button  class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Nonaktifkan Akun Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url(); ?>SuperAdmin/akunAdmin_statusOff" method="post">
                    <div class="modal-body">

                        <script>
                            function hanyaAngka(evt) {
                                var charCode = (evt.which) ? evt.which : event.keyCode
                                if (charCode > 31 && (charCode < 48 || charCode > 57))

                                    return false;
                                return true;
                            }
                        </script>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="form-control id_admin" id="id_admin" name="id_admin">
                                <div class="form-group">
                                    <h3 align="center">Anda Yakin akan menonaktifkan akun admin ini ?</h3>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <a class="btn" data-dismiss="modal">
                            <i class="fa fa-reply"></i> Batal</a>
                        <button  class="btn btn-primary"><i class="fa fa-save"></i> Non Aktifkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalAktif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Aktifkan Akun Admin</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url(); ?>SuperAdmin/akunAdmin_statusOn" method="post">
                    <div class="modal-body">

                        <script>
                            function hanyaAngka(evt) {
                                var charCode = (evt.which) ? evt.which : event.keyCode
                                if (charCode > 31 && (charCode < 48 || charCode > 57))

                                    return false;
                                return true;
                            }
                        </script>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" class="form-control id_admin" id="id_admin" name="id_admin">
                                <div class="form-group">
                                    <h3 align="center">Anda Yakin akan mengaktifkan akun admin ini ?</h3>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <a class="btn" data-dismiss="modal">
                            <i class="fa fa-reply"></i> Batal</a>
                        <button  class="btn btn-primary"><i class="fa fa-save"></i> Aktifkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end modal -->

</div>
<!-- /.content-wrapper -->