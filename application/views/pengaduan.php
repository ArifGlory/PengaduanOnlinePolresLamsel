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
                        <div class="panel-heading">Form Pengaduan</div>
                        <div class="panel-body">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">

                                <?php echo form_open_multipart('Utama/simpanPengaduan')?>
                                <form role="form">
                                    <h3>Data Diri</h3>
                                    <div class="form-group">
                                        <label for="register-username"><i class="icon-user"></i> <b>Nama</b></label>
                                        <input class="form-control" maxlength="40" id="txt_name" name="txt_name" type="text" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="register-username"><i class="icon-document"></i> <b>Pekerjaan</b></label>
                                        <input class="form-control" maxlength="30" id="txt_pekerjaan" name="txt_pekerjaan" type="text" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="register-username"><i class="icon-group"></i> <b>Suku</b></label>
                                        <input class="form-control" maxlength="30" id="txt_suku" name="txt_suku" type="text" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="register-username"><i class="icon-flag"></i> <b>Kewarganegaraan</b></label>
                                        <select required class="form-control" id="opt_warga" name="opt-warga">
                                            <option value="WNI">Kewarganegaraan Indonesia</option>
                                            <option value="WNA">Kewarganegaraan Asing</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="register-username"><i class="icon-map"></i> <b>Alamat</b></label>
                                        <textarea id="txt_alamat" maxlength="200" name="txt_alamat" class="form-control" required></textarea>
                                    </div>
                                    <br>
                                    <h3>Detail Laporan</h3>
                                    <div class="col-md-12">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="register-username"><i class="icon-map3"></i> <b>Tempat Kejadian</b></label>
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
                                                        <input type="text" class="form-control" value="13:14">
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
                                                       <label><input type="radio" value="1" name="optradio_korban" checked><b>Ya</b></label>
                                                   </div>
                                               </div>
                                               <div class="col-md-6">
                                                   <div class="radio">
                                                       <label><input type="radio" value="0" name="optradio_korban"><b>Tidak</b></label>
                                                   </div>
                                               </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <label for="register-username"><i class="icon-user-outline"></i> <b>Nama Orang yang dilaporkan (Kosongkan jika tidak mengenal)</b></label>
                                        <input class="form-control" maxlength="30" id="txt_terlapor" name="txt_terlapor" type="text" placeholder="">
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <div class="form-group">
                                            <label for="register-username"><i class="icon-archive"></i> <b>Deskripsi Kejadian</b></label>
                                            <textarea id="txt_kejadian" maxlength="200" name="txt_kejadian" class="form-control" required></textarea>
                                        </div>
                                        <br>
                                    </div>

                                    <h3>Saksi - Saksi</h3>
                                    <div class="col-md-12">
                                        <label for="register-username"><i class="icon-user"></i> <b>Saksi 1</b></label>
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label for="register-username"><i class="icon-user"></i> <b>Nama Saksi</b></label>
                                                <input class="form-control" maxlength="40" id="txt_nama_saksi1" name="txt_nama_saksi1" type="text" placeholder="" >
                                            </div>
                                            <div class="col-md-4">
                                                <label for="register-username"><i class="icon-calender-outline"></i> <b>Umur Saksi</b></label>
                                                <input class="form-control" maxlength="40" id="txt_umur_saksi1" name="txt_umur_saksi1" type="text" placeholder="" >
                                            </div>
                                            <div class="col-md-4">
                                                <label for="register-username"><i class="icon-document"></i> <b>Pekerjaan Saksi</b></label>
                                                <input class="form-control" maxlength="40" id="txt_pekerjaan_saksi1" name="txt_pekerjaan_saksi1" type="text" placeholder="" >
                                            </div>
                                            <div class="col-md-12">
                                                <br>
                                                <label for="register-username"><i class="icon-map"></i> <b>Alamat Saksi</b></label>
                                                <textarea id="alamat_saksi1" maxlength="200" name="alamat_saksi1" class="form-control"></textarea>
                                                <br><br>
                                            </div>
                                            <br>
                                        </div>

                                        <label for="register-username"><i class="icon-user"></i> <b>Saksi 2</b></label>
                                        <div class="form-group">
                                            <div class="col-md-4">
                                                <label for="register-username"><i class="icon-user"></i> <b>Nama Saksi</b></label>
                                                <input class="form-control" maxlength="40" id="txt_nama_saksi2" name="txt_nama_saksi2" type="text" placeholder="" >
                                            </div>
                                            <div class="col-md-4">
                                                <label for="register-username"><i class="icon-calender-outline"></i> <b>Umur Saksi</b></label>
                                                <input class="form-control" maxlength="40" id="txt_umur_saksi2" name="txt_umur_saksi2" type="text" placeholder="" >
                                            </div>
                                            <div class="col-md-4">
                                                <label for="register-username"><i class="icon-document"></i> <b>Pekerjaan Saksi</b></label>
                                                <input class="form-control" maxlength="40" id="txt_pekerjaan_saksi2" name="txt_pekerjaan_saksi2" type="text" placeholder="" >
                                            </div>
                                            <div class="col-md-12">
                                                <br>
                                                <label for="register-username"><i class="icon-map"></i> <b>Alamat Saksi</b></label>
                                                <textarea id="alamat_saksi" maxlength="200" name="alamat_saksi2" class="form-control"></textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <br><br>
                                                <button style="width: 100%;" class="btn btn-lg btn-success"><i class="fa fa-save"></i> Kirim laporan</button>
                                            </div>
                                        </div>
                                    </div>


                                </form>
                                <?php echo form_close();?>

                            </div>
                        </div>

                    </div>

            </div>
        </div>
    </div>




