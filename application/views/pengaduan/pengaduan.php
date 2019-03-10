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
                <div class="panel-heading">Form Data Diri</div>
                <div class="panel-body">
                    <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                        <?php echo form_open_multipart('User/pengaduan_simpan')?>
                        <div class="col-md-6">
                            <h3>Isi Data Diri anda</h3>
                        </div>
                        <div class="col-md-6" align="center">
                            <h3>Kode Pengaduan : <span class="label label-info"><?php echo $kodePengaduan; ?></span></h3>
                            <input class="form-control" value="<?php echo $kodePengaduan; ?>" maxlength="40" id="txt_kode" name="txt_kode" type="hidden" placeholder="" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="register-username"><i class="icon-user"></i> <b>Nama</b></label>
                            <input class="form-control" maxlength="40" id="txt_nama" name="txt_nama" type="text" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="register-username"><i class="icon-mail"></i> <b>Email</b></label>
                            <input class="form-control" maxlength="40" id="txt_email" name="txt_email" type="text" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="register-username"><i class="icon-flag"></i> <b>Pekerjaan</b></label>
                            <input class="form-control" maxlength="40" id="txt_pekerjaan" name="txt_pekerjaan" type="text" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label for="register-username"><i class="icon-flag"></i> <b>Agama</b></label>
                                <input class="form-control" maxlength="40" id="txt_agama" name="txt_agama" type="text" placeholder="" required>
                            </div>
                            <div class="col-md-4">
                                <label for="register-username"><i class="icon-flag"></i> <b>Suku</b></label>
                                <input class="form-control" maxlength="40" id="txt_suku" name="txt_suku" type="text" placeholder="" required>
                            </div>
                            <div class="col-md-4">
                                <label for="register-username"><i class="icon-flag"></i> <b>Kewarganegaraan</b></label>
                                <input class="form-control" maxlength="40" id="txt_warga_negara" name="txt_warga_negara" type="text" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="txt_perihal">Alamat</label>
                            <textarea  class="form-control" name="txt_alamat" id="txt_alamat"></textarea>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="row">
                <br>
                    <div class="panel panel-primary">
                        <div class="panel-heading">Form Pengaduan</div>
                        <div class="panel-body">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">


                                <form role="form">
                                    <h3>Detail Laporan</h3>
                                    <div class="col-md-12">
                                        <label for="register-username"><i class="icon-user-outline"></i> <b>Nama Kejahatan (Contoh : Pencurian Tas)</b></label>
                                        <input class="form-control" maxlength="30" id="nama_pengaduan" name="nama_pengaduan" type="text" placeholder="">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <br>
                                            <label for="register-username"><i class="icon-map3"></i> <b>Jenis Kejahatan</b></label>
                                            <select class="form-control jenis_kejahatan" name="jenis_kejahatan" required>
                                                <?php foreach ($kejahatan as  $d){ ?>
                                                    <option value="<?php echo $d->id_kejahatan;?>"><?php echo $d->nama_kejahatan;?></option>
                                                <?php   } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <br>
                                            <label for="register-username"><i class="icon-map3"></i> <b>Kecamatan</b></label>
                                            <select class="form-control kecamatan" name="kecamatan" required>
                                                <option value="Bakauheni">Bakauheni</option>
                                                <option value="Candipuro">Candipuro</option>
                                                <option value="Candipuro">Candipuro</option>
                                                <option value="JatiAgung">JatiAgung</option>
                                                <option value="Kalianda">Kalianda</option>
                                                <option value="Katibung">Katibung</option>
                                                <option value="Ketapang">Ketapang</option>
                                                <option value="Merbau Mataram">Merbau Mataram</option>
                                                <option value="Natar">Natar</option>
                                                <option value="Palas">Palas</option>
                                                <option value="Raja basa">Raja basa</option>
                                                <option value="Sidomulyo">Sidomulyo</option>
                                                <option value="Sragi">Sragi</option>
                                                <option value="Tanjung Bintang">Tanjung Bintang</option>
                                                <option value="Tanjung Sari">Tanjung Sari</option>
                                                <option value="Way Panji">Way Panji</option>
                                                <option value="Way Sulan">Way Sulan</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="register-username"><i class="icon-map3"></i> <b>Tempat Kejadian (Spesifik)</b></label>
                                                <input class="form-control" maxlength="70" id="txt_tempatkejadian" name="txt_tempatkejadian" type="text" placeholder="" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="register-username"><i class="icon-calender"></i> <b>Tanggal Kejadian</b></label>
                                                <input class="form-control" required id="date_waktu_kejadian" name="date_waktu_kejadian" type="date">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                            <label for="register-username"><i class="icon-clock3"></i> <b>Pukul</b></label>
                                                <div class="clearfix">
                                                    <div class="input-group clockpicker pull-center" data-placement="left"
                                                         data-align="top" data-autoclose="true">
                                                        <input type="text" name="date_pukul" class="form-control" value="13:14">
                                                        <span class="input-group-addon">
					                                        <i class="icon-clock3"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="register-username"><i class="icon-arrow-right-thick"></i> <b>Apakah Anda Korban ?</b></label>
                                        <div class="form-group">
                                               <div class="col-md-6">
                                                   <div class="radio">
                                                       <label><input type="radio" value="Y" name="optradio_korban" checked><b>Ya</b></label>
                                                   </div>
                                               </div>
                                               <div class="col-md-6">
                                                   <div class="radio">
                                                       <label><input type="radio" value="T" name="optradio_korban"><b>Tidak</b></label>
                                                   </div>
                                               </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <label for="register-username"><i class="icon-user-outline"></i> <b>Nama Orang yang dilaporkan (Jika tidak mengenal tulis saja NN / No name)</b></label>
                                        <input class="form-control" maxlength="30" id="txt_terlapor" name="txt_terlapor" type="text" placeholder="">
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <label for="register-username"><i class="icon-archive"></i> <b>Barang bukti</b></label>
                                        <input class="form-control" maxlength="60" id="txt_bukti" name="txt_bukti" type="text" placeholder="">
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <div class="form-group">
                                            <label for="register-username"><i class="icon-archive"></i> <b>Deskripsi Kejadian</b></label>
                                            <textarea id="txt_deskripsi" maxlength="200" name="txt_deskripsi" class="form-control" required></textarea>
                                        </div>
                                        <br>
                                        <button type="submit" style="width: 100%; background-color: #00CC00; font-size: 15pt" class="btn btn-primary btn-lg">Laporkan<i class="icon-arrow-right3"></i></button>
                                    </div>

                                <?php echo form_close();?>

                            </div>
                        </div>

                    </div>

            </div>
        </div>
    </div>




