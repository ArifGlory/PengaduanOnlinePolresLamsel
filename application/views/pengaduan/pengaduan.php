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

                                <?php echo form_open_multipart('User/pengaduan_simpan')?>
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
                                        <label for="register-username"><i class="icon-user-outline"></i> <b>Nama Orang yang dilaporkan (Kosongkan jika tidak mengenal)</b></label>
                                        <input class="form-control" maxlength="30" id="txt_terlapor" name="txt_terlapor" type="text" placeholder="">
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

                                </form>
                                <?php echo form_close();?>

                            </div>
                        </div>

                    </div>

            </div>
        </div>
    </div>




