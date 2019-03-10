<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pengaduan Online POLRES LamSel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets2/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets2/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets2/css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets2/css/flexslider.css">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets2/fonts/flaticon/font/flaticon.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets2/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets2/css/owl.theme.default.min.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo base_url();?>/assets2/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets1/js/clockpicker/bootstrap-clockpicker.min.css">
    <!-- sweetalert-->
    <script type="text/javascript" src="<?php echo base_url();?>/assets4/aksesoris/SweetAlert/sweetalert.min.js"></script>
    <link rel="stylesheet" src="<?php echo base_url();?>/assets1/css/accordion.css">

    <!-- Modernizr JS -->
    <script src="<?php echo base_url();?>/assets2/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>/assets2/js/respond.min.js"></script>
    <![endif]-->
<?php
$namaUser = $this->session->userdata('nama');
?>
</head>
<body>
<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
        <h1 id="colorlib-logo"><a href="<?php echo base_url();?>">Pengaduan Online POLRES Lampung Selatan</a></h1>
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li class="colorlib-active"><a href="<?php echo base_url();?>">Home</a></li>
                <li><a href="<?php echo base_url();?>User/pengaduan">Pengaduan</a></li>
                <li><a href="<?php echo base_url();?>Utama/cekPengaduan">Cek Pengaduan</a></li>
                <?php if (isset($namaUser)){
                    ?>
                    <li><a href="<?php echo base_url();?>User">Dashboard</a></li>
                    <li><a href="<?php echo base_url();?>Login/logout">Logout</a></li>
                <?php
                }else { ?>
               <!-- <li><a href="<?php /*echo base_url();*/?>Login">Login</a></li>-->
                <?php } ?>
            </ul>
        </nav>

        <div class="colorlib-footer">
            <p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy; POLRES Lampung Selatan <script>document.write(new Date().getFullYear());</script> All rights reserved
                    <ul>

                    </ul>
        </div>

    </aside>