<div id="colorlib-main">
    <?php if ($this->session->flashdata('success')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Pendaftaran berhasil, silakan login",
                showConfirmButton : true,
                type : "success",
                icon: "success"
            });
        </script>
    <?php } ?>
    <?php if ($this->session->flashdata('error')){ ?>
        <script>
            swal({
                title: "Error",
                text: "Login gagal,periksa kembali Email dan Password anda",
                timer: 2000,
                showConfirmButton : false,
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
                        <div class="panel-heading">Silakan Login Untuk masuk ke sistem</div>
                        <div class="panel-body">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <form action="<?php echo base_url(); ?>Login/signInUser" method="post">
                                    <h3>Login</h3>
                                    <div class="form-group">
                                        <label for="register-username"><i class="icon-user"></i> <b>Email</b></label>
                                        <input class="form-control" maxlength="40" id="txt_email" name="txt_email" type="text" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="register-username"><i class="icon-params"></i> <b>Password</b></label>
                                        <input class="form-control" maxlength="40" id="txt_password" name="txt_password" type="password" placeholder="" required>
                                    </div>
                                    <button  type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Login</button>
                                </form>

                                <h3><a style="color: #aa0000" href="<?php echo base_url();?>Utama/register">Belum punya akun ? Daftar disini !</a></h3>
                            </div>
                        </div>

                    </div>

            </div>
        </div>
    </div>




