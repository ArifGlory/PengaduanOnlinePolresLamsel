<div id="colorlib-main">

    <?php if ($this->session->flashdata('success')){ ?>
        <script>
            swal({
                title: "Sukses",
                text: "Pengaduan Berhasil Dikirim",
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
                            <h2 class="colorlib-heading">Dashboard User</h2>
                        </div>
                    </div>
                    <div class="col-md-7" align="left">
                       <img src="<?php echo base_url();?>/foto/logo_polres_lamsel.png" height="150" alt="logo">
                    </div>

                </div>
            </div>
            <div class="row">
                <h3 style="margin-left: 5%">Pengaduan Saya</h3>
                <div class="colorlib-work">
                    <div class="colorlib-narrow-content">
                        <div class="row row-bottom-padded-md">
                            <?php foreach ($pengaduanku as $b) { ?>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <h4><?php echo $b->nama_pengaduan?></h4>
                                <a href="<?php echo base_url();?>User/detailPengaduan/<?php echo $b->id_pengaduan;?>">
                                <div class="project" style="background-image: url(<?php echo base_url();?>/foto/<?php echo $b->foto; ?>);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3 style="color: white"><?php echo $b->nama_kejahatan; ?></h3>
                                        </div>
                                    </div>
                                </div>
                                </a>
                            </div>
                            <?php } ?>

                           <!-- <div class="col-md-3 animate-box" data-animate-effect="fadeInLeft">
                                <h4>Perampokan di jalan</h4>
                                <div class="project" style="background-image: url(<?php /*echo base_url();*/?>/foto/perampokan.jpg);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Perampokan</a></h3>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <ul class="pagination">
                                    <li class="disabled"><a href="#">&laquo;</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




