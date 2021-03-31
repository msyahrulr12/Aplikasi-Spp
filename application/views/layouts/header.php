<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Aplikasi Pembayaran SPP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/owl.theme.css">
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?=base_url('assets/template/')?>js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- select2 JS
		============================================ -->
    <link href="<?=base_url('assets/')?>select2/dist/css/select2.min.css" rel="stylesheet" />
    <!-- datatables JS
		============================================ -->
    <link href="<?=base_url('assets/datatables/DataTables-1.10.23/')?>css/jquery.dataTables.min.css" rel="stylesheet" />
    <style>
        ::-webkit-scrollbar {
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            background: #ffffff;
        }

        ::-webkit-scrollbar-thumb {
            background: #bebebe;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #868686;
        }
    </style>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <?php
                            if ($this->session->userdata('level') != 'siswa') {
                        ?>
                                <li>
                                    <a title="Home" href="<?=site_url('/Home')?>" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                                </li>
                                <li>
                                    <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="fa fa-dollar icon-wrap"></span> <span class="mini-click-non">Entri Pembayaran</span></a>
                                    <ul class="submenu-angle" aria-expanded="false">
                                        <li><a title="All Students" href="<?=site_url('/Pembayaran')?>"><span class="mini-sub-pro">All Pembayaran</span></a></li>
                                        <li><a title="Add Students" href="<?=site_url('/Pembayaran/create_pembayaran')?>"><span class="mini-sub-pro">Add Pembayaran</span></a></li>
                                    </ul>
                                </li>
                        <?php
                            } else {
                        ?>
                                <li>
                                    <a title="Home" href="<?=site_url('/Home/indexSiswa')?>" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                                </li>
                                <li>
                                    <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="fa fa-dollar icon-wrap"></span> <span class="mini-click-non">Pembayaran SPP</span></a>
                                    <ul class="submenu-angle" aria-expanded="false">
                                        <li><a title="All Students" href="<?=site_url('/Pembayaran/indexSiswa')?>"><span class="mini-sub-pro">All Pembayaran</span></a></li>
                                    </ul>
                                </li>
                        <?php
                            }
                        ?>
                        <?php
                            if ($this->session->userdata('level') == 'admin') {
                        ?>
                                <li>
                                    <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Petugas</span></a>
                                    <ul class="submenu-angle" aria-expanded="false">
                                        <li><a title="All Students" href="<?=site_url('/Petugas')?>"><span class="mini-sub-pro">All Petugas</span></a></li>
                                        <li><a title="Add Students" href="<?=site_url('/Petugas/create_petugas')?>"><span class="mini-sub-pro">Add Petugas</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Siswa</span></a>
                                    <ul class="submenu-angle" aria-expanded="false">
                                        <li><a title="All Students" href="<?=site_url('/Siswa')?>"><span class="mini-sub-pro">All Siswa</span></a></li>
                                        <li><a title="Add Students" href="<?=site_url('/Siswa/create_siswa')?>"><span class="mini-sub-pro">Add Siswa</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Kelas</span></a>
                                    <ul class="submenu-angle" aria-expanded="false">
                                        <li><a title="All Professors" href="<?=site_url('/Kelas')?>"><span class="mini-sub-pro">All Kelas</span></a></li>
                                        <li><a title="Add Professor" href="<?=site_url('/Kelas/create_kelas')?>"><span class="mini-sub-pro">Add Kelas</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">SPP</span></a>
                                    <ul class="submenu-angle" aria-expanded="false">
                                        <li><a title="All Spp" href="<?=site_url('/Spp')?>"><span class="mini-sub-pro">All SPP</span></a></li>
                                        <li><a title="Add Spp" href="<?=site_url('/Spp/create_spp')?>"><span class="mini-sub-pro">Add SPP</span></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a title="Home" href="<?=site_url('/History')?>" aria-expanded="false"><i class="fa fa-history"></i><span class="icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">History Pembayaran</span></a>
                                </li>
                                <li>
                                    <a title="Home" href="<?=site_url('/Report')?>" aria-expanded="false"><i class="fa fa-print"></i><span class="icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Generate Laporan</span></a>
                                </li>
                            <?php
                                }
                            ?>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <?php
                                                    if ($this->session->userdata('level') != 'siswa') {
                                                ?>
                                                    <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                    </li>
                                                    <li class="nav-item"><a href="#" class="nav-link">Pembayaran</a>
                                                    </li>
                                                <?php
                                                    } else {
                                                ?>
                                                    <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                                    </li>
                                                    <li class="nav-item"><a href="#" class="nav-link">Pembayaran</a>
                                                    </li>
                                                <?php
                                                    }
                                                ?>

                                                <?php
                                                    if ($this->session->userdata('level') == 'admin') {
                                                ?>
                                                <li class="nav-item"><a href="#" class="nav-link">Petugas</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Siswa</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Kelas</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">SPP</a>
                                                </li>
                                                <?php
                                                    }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="img/product/pro4.jpg" alt="" />
															<span class="admin-name"><?=$this->session->userdata('level') == 'siswa' ? $this->session->userdata('nama') : $this->session->userdata('nama_petugas') ?></span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li>
                                                            <?php
                                                                if ($this->session->userdata('level') == 'siswa') {
                                                                    $urlProfile = 'profileSiswa';
                                                                } else {
                                                                    $urlProfile = 'profile';
                                                                }
                                                            ?>
                                                            <a href="<?=site_url('/Home/'.$urlProfile)?>"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                                                        </li>
                                                        <li><a href="<?=site_url('/Auth/logout')?>"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <?php
                                            if ($this->session->userdata('level') != 'siswa') {
                                        ?>
                                                <li>
                                                    <a title="Home" href="<?=site_url('/Home')?>" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                                                </li>
                                                <li>
                                                    <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="fa fa-dollar icon-wrap"></span> <span class="mini-click-non">Pembayaran SPP</span></a>
                                                    <ul class="submenu-angle" aria-expanded="false">
                                                        <li><a title="All Students" href="<?=site_url('/Pembayaran')?>"><span class="mini-sub-pro">All Pembayaran</span></a></li>
                                                        <li><a title="Add Students" href="<?=site_url('/Pembayaran/create_pembayaran')?>"><span class="mini-sub-pro">Add Pembayaran</span></a></li>
                                                    </ul>
                                                </li>
                                        <?php
                                            } else {
                                        ?>
                                                <li>
                                                    <a title="Home" href="<?=site_url('/Home/indexSiswa')?>" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a>
                                                </li>
                                                <li>
                                                    <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="fa fa-dollar icon-wrap"></span> <span class="mini-click-non">Pembayaran SPP</span></a>
                                                    <ul class="submenu-angle" aria-expanded="false">
                                                        <li><a title="All Students" href="<?=site_url('/Pembayaran/indexSiswa')?>"><span class="mini-sub-pro">All Pembayaran</span></a></li>
                                                    </ul>
                                                </li>
                                        <?php
                                            }
                                        ?>
                                        <?php
                                            if ($this->session->userdata('level') == 'admin') {
                                        ?>
                                                <li>
                                                    <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Petugas</span></a>
                                                    <ul class="submenu-angle" aria-expanded="false">
                                                        <li><a title="All Students" href="<?=site_url('/Petugas')?>"><span class="mini-sub-pro">All Petugas</span></a></li>
                                                        <li><a title="Add Students" href="<?=site_url('/Petugas/create_petugas')?>"><span class="mini-sub-pro">Add Petugas</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"></span> <span class="mini-click-non">Siswa</span></a>
                                                    <ul class="submenu-angle" aria-expanded="false">
                                                        <li><a title="All Students" href="<?=site_url('/Siswa')?>"><span class="mini-sub-pro">All Siswa</span></a></li>
                                                        <li><a title="Add Students" href="<?=site_url('/Siswa/create_siswa')?>"><span class="mini-sub-pro">Add Siswa</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Kelas</span></a>
                                                    <ul class="submenu-angle" aria-expanded="false">
                                                        <li><a title="All Professors" href="<?=site_url('/Kelas')?>"><span class="mini-sub-pro">All Kelas</span></a></li>
                                                        <li><a title="Add Professor" href="<?=site_url('/Kelas/create_kelas')?>"><span class="mini-sub-pro">Add Kelas</span></a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="has-arrow" href="all-professors.html" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">SPP</span></a>
                                                    <ul class="submenu-angle" aria-expanded="false">
                                                        <li><a title="All Spp" href="<?=site_url('/Spp')?>"><span class="mini-sub-pro">All SPP</span></a></li>
                                                        <li><a title="Add Spp" href="<?=site_url('/Spp/create_spp')?>"><span class="mini-sub-pro">Add SPP</span></a></li>
                                                    </ul>
                                                </li>
                                            <?php
                                                }
                                            ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <!-- check if flash message is exists -->
            <?php if ($this->session->flashdata('message') !== null): ?>
                <div class="container" style="margin-top: 10px;">
                    <!-- error -->
                    <div class="alert alert-<?=$this->session->flashdata('message')['alert']?> alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong><?=ucfirst($this->session->flashdata('message')['status'])?>!</strong> <?=$this->session->flashdata('message')['data']?>
                    </div>
                    <!-- end error -->
                </div>
            <?php endif; ?>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <ul class="breadcome-menu">
                                            <?php
                                                foreach ($breadcrumbs as $key => $value) {
                                            ?>
                                                <li>
                                                    <a
                                                        href="<?=$value['link'] == false ? '#' : site_url($value['link'])?>"
                                                        class="<?=$value['link'] == false ? 'disabled' : 'text-primary' ?>"
                                                    >
                                                        <?=$value['name']?>
                                                    </a> 
                                                    <?= $key+1 == sizeof($breadcrumbs) ? '' : '<span class="bread-slash">/</span>'?>
                                                </li>
                                            <?php
                                                }
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>