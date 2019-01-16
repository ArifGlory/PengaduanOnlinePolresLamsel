<div id="colorlib-main">
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
                        <div class="panel-heading">Daftar akun untuk pengaduan online</div>
                        <div class="panel-body">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <form action="<?php echo base_url(); ?>Utama/register_simpan" method="post">
                                    <h3>Buat Akun Baru</h3>
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
                                        <label for="register-username"><i class="icon-params"></i> <b>Password</b></label>
                                        <input class="form-control" maxlength="40" id="txt_password" name="txt_password" type="password" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="register-username"><i class="icon-params"></i> <b>Konfirmasi Password</b></label>
                                        <input class="form-control" maxlength="40" id="txt_password_confirm" name="txt_password_confirm" type="password" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="txt_perihal">Alamat</label>
                                        <textarea  class="form-control" name="txt_alamat" id="txt_alamat"></textarea>
                                    </div>
                                    <button  class="btn btn-primary"><i class="fa fa-save"></i> Daftar</button>
                                </form>

                                <h3><a style="color: #aa0000" href="<?php echo base_url();?>Login">Sudah punya akun ? Yuk Login!</a></h3>
                            </div>
                        </div>

                    </div>

            </div>
        </div>
    </div>




