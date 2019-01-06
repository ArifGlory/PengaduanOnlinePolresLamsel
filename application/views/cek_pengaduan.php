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
                        <div class="panel-heading">Form Cek Pengaduan</div>
                        <div class="panel-body">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">

                                <?php echo form_open_multipart('Utama/cekPengaduan')?>
                                <form role="form">
                                    <h3>Silahkan Masukkan Kode Pengaduan Anda</h3>
                                    <div class="form-group">
                                        <label for="register-username"><i class="icon-archive"></i> <b>Kode Pengaduan</b></label>
                                        <input class="form-control" maxlength="40" id="txt_kode" name="txt_kode" type="text" placeholder="" required>
                                    </div>
                                </form>
                                <?php echo form_close();?>
                            </div>
                        </div>

                    </div>

            </div>
        </div>
    </div>




