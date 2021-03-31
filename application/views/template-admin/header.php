<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Layanan SPBE</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Mannatthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="<?=base_url()?>asset-user/assets/img/spbe.ico">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?=base_url()?>asset-admin/assets/plugins/morris/morris.css">

    <link href="<?=base_url()?>asset-admin/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>asset-admin/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?=base_url()?>asset-admin/assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                <i class="ion-close"></i>
            </button>

            <!-- LOGO -->
            <div class="topbar-center">

                <div class="text-center">
                    <a href="<?=base_url('C_Admin')?>" class="logo"><i class=""></i>Admin Layanan SPBE</a>

                </div>
            </div>

            <div class="sidebar-inner slimscrollleft">

                <div id="sidebar-menu">
                    <ul>

                        <li>
                            <a href="<?=base_url('C_Admin')?>" class="waves-effect"><i
                                    class="mdi mdi-airplay"></i><span>
                                    Dashboard</span></a>
                        </li>
                        <li>
                            <a href="<?=base_url('C_Admin/aplikasi')?>" class="waves-effect"><i
                                    class="mdi mdi-application"></i><span>
                                    Tiket Layanan Aplikasi </span></a>
                        </li>
                        <li>
                            <a href="<?=base_url('C_Admin/Domain')?>" class="waves-effect"><i
                                    class="mdi mdi-cellphone-link"></i><span> Tiket
                                    layanan Domain
                                </span></a>
                        </li>
                        <li>
                            <a href="<?=base_url('C_Admin/Zoom')?>" class="waves-effect"><i
                                    class="mdi mdi-cloud"></i><span>
                                    Tiket Layanan Zoom</span></a>
                        </li>




                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-inline float-right mb-0">
                            <!-- language-->



                            <li class="list-inline-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user"
                                    data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                    aria-expanded="false">
                                    <img src="<?=base_url()?>asset-user/assets/img/logo.png" alt=" user"
                                        class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5>Welcome</h5>
                                    </div>

                                    <a class="dropdown-item" href="<?=base_url('Auth/logout')?>"><i
                                            class="mdi mdi-logout m-r-5 text-muted"></i>
                                        Logout</a>
                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left waves-light waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                            <li class="hide-phone app-search">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </li>
                        </ul>

                        <div class="clearfix"></div>

                    </nav>

                </div>
                <!-- Top Bar End -->