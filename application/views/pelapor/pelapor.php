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
            Data Pelapor
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Data Pelapor</li>
        </ol>
        <div class="col-sm-12">

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
                                <th>Nama Pelapor</th>
                                <th>Pekerjaan</th>
                                <th>Alamat</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($pelapor as $b){
                                if ($b->publish == "T"){
                                    $status = "Aktif";
                                }else {
                                    $status = "Non Aktif";
                                } ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $b->nama_user; ?></td>
                                <td><?php echo $b->pekerjaan; ?></td>
                                <td><?php echo $b->alamat; ?></td>
                                <td><?php echo $status; ?></td>
                                <td align="center">
                                    <a class="btn bg-maroon btn-sm " href="<?php echo base_url();?>Master/detailPelapor/<?php echo $b->id_user; ?>" >
                                        <i class="fa fa-info"></i> Detail</a>
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