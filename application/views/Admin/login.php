<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Login</title>

    <!-- Favicons -->
    <link href="<?=base_url()?>asset-admin/login/img/favicon.png" rel="icon">
    <link href="<?=base_url()?>asset-admin/login/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>asset-admin/login/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=base_url()?>asset-admin/login/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>asset-admin/login/css/style.css" rel="stylesheet">
    <link href="<?=base_url()?>asset-admin/login/css/style-responsive.css" rel="stylesheet">


</head>

<body>
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <div id="login-page">
        <div class="container">
            <form class="form-login" method="POST" action="<?=base_url('Auth/proses_login')?>">
                <h2 class="form-login-heading">Login Admin</h2>
                <div class="login-wrap">
                    <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
                    <br>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                    <br>
                    <button class="btn btn-theme btn-block" type="submit" name="login"><i
                            class="fa fa-lock"></i>Masuk</button>
                </div>
            </form>
        </div>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?=base_url()?>asset-admin/login/lib/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>asset-admin/login/lib/bootstrap/js/bootstrap.min.js"></script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?=base_url()?>asset-admin/login/lib/jquery.backstretch.min.js"></script>
    <script>
    $.backstretch("img/login-bg.jpg", {
        speed: 500
    });
    </script>
</body>

</html>