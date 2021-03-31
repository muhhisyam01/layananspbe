<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="<?=base_url()?>asset-user/assets/img/spbe.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>E-Layanan</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="<?=base_url()?>asset-user/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="<?=base_url()?>asset-user/assets/css/landing-page.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
    <link href="<?=base_url()?>asset-user/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>

<body class="landing-page landing-page1">
    <nav class="navbar navbar-transparent navbar-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <a href="<?=base_url('C_user')?>">
                    <div class="logo-container">
                        <div class="logo">
                            <img src="<?=base_url()?>asset-user/assets/img/logo.png" alt="Creative Tim Logo">
                        </div>
                        <div class="brand">
                            Elayanan
                            SPBE
                        </div>
                    </div>
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="example">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?=base_url('C_user/tiketaplikasi')?>">
                            <i class=""></i>
                            Pendaftaran Aplikasi
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('C_user/tiketdomain')?>">
                            <i class=""></i>
                            Pendaftaran Domain
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('C_user/tiketzoom')?>">
                            <i class=""></i>
                            Peminjaman Akun Zoom
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('C_user/bantuan')?>">
                            <i class=""></i>
                            Bantuan
                        </a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>