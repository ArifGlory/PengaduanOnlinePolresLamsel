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

if ($tanggapan !=null){
    foreach ($tanggapan as $item) {
        $isiTanggapan = $item->isi_tanggapan;
        $pasal = $item->pasal;
        $tipe = $item->jenis_kejahatan;
    }
}else{
    $isiTanggapan = "belum ditanggapi";
    $pasal = "-";
    $tipe = "-";
}

?>
<div id="colorlib-main">

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
                <div class="panel panel-primary">
                        <div class="panel-heading">Hasil Cek Pengaduan</div>
                        <div class="panel-body">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <br>
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                            <h3>Nama Pengaduan =  <?php echo $namaPengaduan; ?></h3>
                                        </div>
                                        <div class="col-md-6" align="right">
                                            <h2><span class="label label-info"><?php echo $sttsMsg; ?></span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">Tanggapan Admin Pengaduan</div>
                    <div class="panel-body">
                        <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                            <br>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Jenis Kejahatan</label>
                                    <br>
                                    <h3><span class="label label-info"><?php echo $tipe; ?></span></h3>
                                </div>
                                <div class="form-group">
                                    <label class="bmd-label-floating">Berkenaan dengan pasal</label>
                                    <br>
                                    <h3><span class="label label-info"><?php echo $pasal; ?></span></h3>
                                </div>
                                <div class="col-md-12">
                                    <label class="bmd-label-floating">Tindakan Polisi</label>
                                    <h3><?php cetak($isiTanggapan); ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <a class="btn btn-lg btn-success" type="submit"
                   href="<?php echo base_url();?>User/detailPengaduan/<?php echo $kodePengaduan;?>"> Lihat Detail</a>
            </div>
        </div>
    </div>




