<!-- Content Wrapper. Contains page content -->
<?php
$nama = $this->session->userdata('nama');
$hakAkses = $this->session->userdata('hak_akses');
$no = 1;
?>
<?php
foreach ($pengaduan as $b){
    $namaPengaduan = $b->nama_pengaduan;
    $jenisKejahatan = $b->nama_kejahatan;
    $tempat = $b->tempat_kejadian;
    $tanggal = $b->tanggal;
    $pukul = $b->pukul;
    $terlapor = $b->orang_dilaporkan;
    $deskripsiKejadian = $b->deskripsi;
    $status = $b->status;
    $idPengaduan = $b->id_pengaduan;
    $kodePengaduan = $b->kode_pengaduan;

}


if ($status == "M"){
    $sttsMsg = "Menunggu";
}else if ($status == "P"){
    $sttsMsg = "Di Proses";
}else if ($status == "T"){
    $sttsMsg = "Di Tolak";
}else if ($status == "S"){
    $sttsMsg = "Selesai";
}

if ($terlapor == null || $terlapor == ""){
    $terlapor = "Tidak ada";
}

foreach ($user as $d){
    $pekerjaanUser = $d->pekerjaan;
    $alamat = $d->alamat;
    $namaPelapor = $d->nama_user;
}

if (isset($tanggapan)){
    foreach ($tanggapan as $d){
        $isiTanggapan = $d->isi_tanggapan;
    }
}

?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Sweetalert berhasil tambah data  -->
    <?php if ($this->session->flashdata('success')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Berhasil tambah data tanggapan",
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
                text: "Berhasil mengubah data tanggapan",
                timer: 2000,
                showConfirmButton : false,
                type : "success",
                icon: "success"
            });
        </script>
    <?php } ?>
    <section class="content-header">
        <h1>
            Detail pengaduan
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo  base_url(); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Detail <Pengaduan></Pengaduan></li>
        </ol>
        <div class="col-sm-12">

        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Detail Pengaduan</div>
                    <div class="panel-body">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <div class="col-md-12">
                                <div class="col-md-6">
                                    <h3><?php echo $namaPengaduan; ?></h3>
                                </div>
                                <div class="col-md-6" align="right"><h3><span class="label label-info"><?php echo $sttsMsg; ?></span></h3></div>

                            </div>
                            <br><br>
                            <!-- panel data pelapor -->
                            <div class="panel-group">
                                <br><br>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" href="#collapse2">Data Diri Pelapor</a>
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table class="table table-responsive">
                                                <tr>
                                                    <td style="width: 50%"><h5>Nama </h5></td>
                                                    <td style="width: 50%"><h5><?php echo $namaPelapor;?></h5></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%"><h5>Pekerjaan </h5></td>
                                                    <td style="width: 50%"><h5><?php echo $pekerjaanUser;?></h5></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%"><h5>Alamat </h5></td>
                                                    <td style="width: 50%"><h5><?php echo $alamat;?></h5></td>
                                                </tr>
                                            </table></div>
                                        <div class="panel-footer"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- panel kejadian -->
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" href="#collapse1">Detail Kejadian</a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table class="table table-responsive">
                                                <tr>
                                                    <td style="width: 50%"><h5>Jenis Kejahatan</h5></td>
                                                    <td style="width: 50%"><h5><?php echo $jenisKejahatan;?></h5></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%"><h5>Tanggal</h5></td>
                                                    <td style="width: 50%"><h5><?php echo date("d-F-Y",strtotime($tanggal)); ?> </h5></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%"><h5>Pukul </h5></td>
                                                    <td style="width: 50%"><h5><?php echo $pukul;?></h5></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%"><h5>Tempat Kejadian </h5></td>
                                                    <td style="width: 50%"><h5><?php echo $tempat;?></h5></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%"><h5>Terlapor </h5></td>
                                                    <td style="width: 50%"><h5><?php echo $terlapor;?></h5></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%"><h5>Deskripsi kejadian </h5></td>
                                                    <td style="width: 50%"><h5><?php echo $deskripsiKejadian;?></h5></td>
                                                </tr>
                                            </table></div>
                                        <div class="panel-footer"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- panel saksi -->
                            <div class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse"  href="#collapse3">Saksi- Saksi</a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse collapse">
                                        <div class="panel-body">

                                            <?php if (isset($saksi)) {
                                                $no = 1;
                                                $idCollapse = $no + 3;
                                                ?>

                                                <?php foreach ($saksi as $c) {?>
                                                    <div class="panel-group">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">
                                                                    <a data-toggle="collapse"  href="#collapse<?php  echo $idCollapse;?>">Saksi ke <?php echo $no;?> </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapse<?php  echo $idCollapse;?>" class="panel-collapse collapse">
                                                                <div class="panel-body">
                                                                    <table class="table table-responsive">

                                                                        <tr>
                                                                            <td style="width: 50%"><h5>Nama Saksi</h5></td>
                                                                            <td style="width: 50%"><h5><?php echo $c->nama_saksi;?></h5></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 50%"><h5>Umur Saksi</h5></td>
                                                                            <td style="width: 50%"><h5><?php echo $c->umur_saksi;?></h5></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 50%"><h5>Pekerjaan Saksi </h5></td>
                                                                            <td style="width: 50%"><h5><?php echo $c->pekerjaan_saksi;?></h5></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td style="width: 50%"><h5>Alamat Saksi </h5></td>
                                                                            <td style="width: 50%"><h5><?php echo $c->alamat_saksi;?></h5></td>
                                                                        </tr>

                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    $no++;
                                                    $idCollapse++;
                                                } ?>
                                            <?php }else { ?>
                                                <h3>Data Saksi tidak ada, silakhkan tambahkan data saksi jika anda memiliki saksi</h3>
                                            <?php } ?>

                                        </div>
                                        <div class="panel-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <?php if ($hakAkses == "SR"){ ?>

                            <?php if (isset($tanggapan)){ ?>
                                <button class="btn btn-md bg-maroon edit_tanggapan" name="edit_tanggapan" style="background-color: #2dc899; color: white; width: 20%" href=""
                                        data-toggle="modal" data-target="#modalEdit">
                                    <i class="fa fa-pencil"></i> Ubah Tanggapan</button>
                            <?php  }else { ?>

                            <button class="btn btn-md bg-olive add_tanggapan" name="add_tanggapan" style="background-color: #2dc899; color: white; width: 20%" href=""
                                    data-toggle="modal" data-target="#modalAdd" data-id_pengaduan="<?php echo $idPengaduan; ?>">
                                <i class="fa fa-plus"></i> Tambah Tanggapan</button>
                            <br>
                            <?php } ?>

                        <?php } ?>

                        <button class="btn btn-md bg-olive view_tanggapan pull-right" name="view_tanggapan" style="background-color: #2dc899; color: white; width: 20%" href=""
                                data-toggle="modal" data-target="#modalDetail" data-id_pengaduan="<?php echo $idPengaduan; ?>">
                            <i class="fa fa-arrow-right"></i> Lihat Tanggapan</button>
                    </div>

                </div>

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
                    <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">TAMBAH Tanggapan </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url(); ?>Master/tanggapan_simpan" method="post">
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" class="form-control id_pengaduan" value="<?php echo $idPengaduan;?>" name="id_pengaduan">
                                <input type="hidden" class="form-control kode_pengaduan" value="<?php echo $kodePengaduan;?>" name="kode_pengaduan">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Status Pengaduan</label>
                                    <select class="form-control status_pengaduan" name="status_pengaduan" required>
                                        <option value="P">Di Proses</option>
                                        <option value="T">Di Tolak</option>
                                        <option value="S">Selesai</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <br>
                                    <label class="control-label" for="txt_perihal">Isi Tanggapan</label>
                                    <textarea required  class="form-control isi_tanggapan" name="isi_tanggapan" id="isi_tanggapan"></textarea>
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

    <div class="modal fade" id="modalDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Detail Tanggapan </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" class="form-control id_pengaduan" value="<?php echo $idPengaduan;?>" name="id_pengaduan">
                                <input type="hidden" class="form-control kode_pengaduan" value="<?php echo $kodePengaduan;?>" name="kode_pengaduan">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Status Pengaduan</label>
                                    <br>
                                    <h3><span class="label label-info"><?php echo $sttsMsg; ?></span></h3>

                                </div>
                                <div class="form-group">
                                    <br>
                                    <label class="control-label" for="txt_perihal">Isi Tanggapan</label>
                                    <textarea required disabled  class="form-control isi_tanggapan" name="isi_tanggapan" id="isi_tanggapan"><?php echo $isiTanggapan;?></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a class="btn" data-dismiss="modal">
                            <i class="fa fa-reply"></i> Tutup</a>
                    </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">Edit Tanggapan </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?php echo base_url(); ?>Master/tanggapan_update" method="post">
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-md-12">
                                <input type="hidden" class="form-control id_pengaduan" value="<?php echo $idPengaduan;?>" name="id_pengaduan">
                                <input type="hidden" class="form-control kode_pengaduan" value="<?php echo $kodePengaduan;?>" name="kode_pengaduan">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Status Pengaduan</label>
                                    <select class="form-control status_pengaduan" name="status_pengaduan" required>
                                        <option value="P">Di Proses</option>
                                        <option value="T">Di Tolak</option>
                                        <option value="S">Selesai</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <br>
                                    <label class="control-label" for="txt_perihal">Isi Tanggapan</label>
                                    <textarea required  class="form-control isi_tanggapan" name="isi_tanggapan" id="isi_tanggapan"><?php echo $isiTanggapan;?></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a class="btn" data-dismiss="modal">
                            <i class="fa fa-reply"></i> Batal</a>
                        <button  class="btn btn-primary"><i class="fa fa-save"></i> Simpan Perubahan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>
<!-- /.content-wrapper -->