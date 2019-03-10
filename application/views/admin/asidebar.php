<?php
$nama = $this->session->userdata('nama');
$hakAkses = $this->session->userdata('hak_akses');
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url();?>/assets4/dist/img/avatar-13.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $nama; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Menu Utama</li>
            <li class="active treeview">
                <a href="<?php echo base_url(); ?>/Dashboard">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li class="active treeview">
                <a href="<?php echo base_url(); ?>Master/pengaduan">
                    <i class="fa fa-comment"></i> <span>Pengaduan</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <?php if ($hakAkses == "SPKT") { ?>
            <!--<li class="active treeview">
                <a href="<//?php /*echo base_url(); */?>Master/pelapor">
                    <i class="fa fa-user-secret"></i> <span>Data Pelapor</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>-->
            <?php } ?>
            <?php if ($hakAkses == "S") { ?>
            <li class="active treeview">
                <a href="<?php echo base_url(); ?>SuperAdmin/akunAdmin">
                    <i class="fa fa-user-secret"></i> <span>Pengaturan Admin</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <?php } ?>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>