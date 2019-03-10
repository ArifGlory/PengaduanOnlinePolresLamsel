<div id="colorlib-main">
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
        $validate = $b->validasi;
        $kecamatan = $b->kecamatan;
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

    if ($validate == "T"){
        $sttsValidate = "Pengaduan Disetujui";
    }else if ($validate == "F") {
        $sttsValidate = "Pengaduan Belum disetujui";
    }else{
        $sttsValidate = "Pengaduan Ditolak";
    }


    if ($terlapor == null || $terlapor == ""){
        $terlapor = "Tidak ada";
    }

    if ($tanggapan != null){
        foreach ($tanggapan as $d){
            $isiTanggapan = $d->isi_tanggapan;
            $jenis = $d->jenis_kejahatan;
            $pasal = $d->pasal;
        }
    }else{
        $isiTanggapan = "-";
        $pasal = "-";
        $jenis = "-";
    }

    foreach ($user as $d){
        $pekerjaanUser = $d->pekerjaan;
        $alamat = $d->alamat;
        $namaPelapor = $d->nama_user;
        $suku = $d->suku;
        $agama = $d->agama;
        $negara = $d->warga_negara;
    }

    ?>
    <?php if ($this->session->flashdata('success')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Berhasil tambah data saksi",
                timer: 2000,
                showConfirmButton : false,
                type : "success",
                icon: "success"
            });
        </script>
    <?php } ?>
    <?php if ($this->session->flashdata('success_2')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Pengaduan anda berhasil ditambahkan",
                timer: 2000,
                showConfirmButton : false,
                type : "success",
                icon: "success"
            });
        </script>
    <?php } ?>
    <div class="colorlib-about">
        <div class="colorlib-narrow-content">
            <div class="row row-bottom-padded-md">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                    <div class="col-md-5">
                        <div class="about-desc">
                            <span class="heading-meta">POLRES LAMPUNG SELATAN</span>
                            <h2 class="colorlib-heading">Pengaduan Online</h2>
                        </div>
                    </div>
                    <div class="col-md-7" align="left">
                       <img src="<?php echo base_url();?>/foto/logo_polres_lamsel.png" height="150" alt="logo">
                    </div>

                </div>
            </div>
            <div class="row">
                <h2>Kode Pengaduan : <span class="label label-info"><?php echo $kodePengaduan; ?></span></h2>
                <h2><span class="label label-info"><?php echo $sttsValidate; ?></span></h2>
                    <div class="panel panel-primary">
                        <div class="panel-heading">Detail Pengaduan</div>
                        <div class="panel-body">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <h3><?php echo $namaPengaduan; ?></h3>
                                    </div>
                                    <div class="col-md-6" align="right"><h3>Status = <?php echo $sttsMsg; ?></h3></div>
                                </div>
                                <br><br>
                                <!-- panel data pelapor -->
                                <div class="panel-group">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" style="background-color: #2dc899" href="#collapse2">Data Diri Pelapor</a>
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
                                                    <td style="width: 50%"><h5>Suku </h5></td>
                                                    <td style="width: 50%"><h5><?php echo $suku;?></h5></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%"><h5>Agama </h5></td>
                                                    <td style="width: 50%"><h5><?php echo $agama;?></h5></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 50%"><h5>Kewarganegaraan </h5></td>
                                                    <td style="width: 50%"><h5><?php echo $negara;?></h5></td>
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
                                                <a data-toggle="collapse" style="background-color: #2dc899" href="#collapse1">Detail Kejadian</a>
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
                                                        <td style="width: 50%"><h5>Kecamatan </h5></td>
                                                        <td style="width: 50%"><h5><?php echo $kecamatan;?></h5></td>
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
                                                <a data-toggle="collapse" style="background-color: #2dc899" href="#collapse3">Saksi- Saksi</a>
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
                                                                    <a data-toggle="collapse" style="background-color: #2dc899" href="#collapse<?php  echo $idCollapse;?>">Saksi ke <?php echo $no;?> </a>
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
                                                <button class="btn btn-md bg-olive" style="background-color: #2dc899; color: white" href="" data-toggle="modal" data-target="#modalAdd">
                                                    <i class="fa fa-plus"></i> Tambah Saksi</button>
                                                <br>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-md bg-olive view_tanggapan pull-right" name="view_tanggapan" style="background-color: #2dc899; color: white; width: 20%" href=""
                                        data-toggle="modal" data-target="#modalDetail">
                                    <i class="fa fa-arrow-right"></i> Lihat Tanggapan Admin</button>
                            </div>
                        </div>

                    </div>

                <!-- start modal -->
                <div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold;">TAMBAH DATA SAKSI</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form enctype="multipart/form-data" action="<?php echo base_url(); ?>User/saksi_simpan" method="post">
                                <div class="modal-body" style="background-color: #bbdefb;">

                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="hidden" maxlength="40" value="<?php echo $idPengaduan;?>" class="form-control" name="idpengaduan" required>
                                            <input type="hidden" maxlength="40" value="<?php echo $kodePengaduan;?>" class="form-control" name="kodepengaduan" required>
                                            <div class="form-group">
                                                <label>Nama Saksi</label>
                                                <input type="text" maxlength="40" class="form-control" name="namasaksi" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Umur Saksi</label>
                                                <input type="number" maxlength="40" class="form-control" name="umursaksi" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Pekerjaan Saksi</label>
                                                <input type="text" maxlength="40" class="form-control" name="pekerjaansaksi" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Alamat Saksi</label>
                                                <textarea type="text" maxlength="70" class="form-control" name="alamatsaksi" required></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <a style="background-color: #00CC00; color: white" class="btn" data-dismiss="modal">
                                        <i class="fa fa-reply"></i> Batal</a>
                                    <button style="color: black"  class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
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
                                            <label class="bmd-label-floating">Jenis Kejahatan</label>
                                            <br>
                                            <h3><span class="label label-info"><?php echo $jenis; ?></span></h3>
                                        </div>
                                        <div class="form-group">
                                            <label class="bmd-label-floating">Berkenaan dengan pasal</label>
                                            <br>
                                            <h3><span class="label label-info"><?php echo $pasal; ?></span></h3>
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <label class="control-label" for="txt_perihal">Tindakan Polisi</label>
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


            </div>
        </div>
    </div>




