<html lang="en">
    <head>	
        <title><?= $title; ?></title>
        <!-- meta -->	
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="New Login Form web template" />
        <meta name="author" content="Aslan" />
        <meta name="keywords" content="New Login Form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <!-- favicon -->
        <link rel="shortcut icon" href="<?= base_url()?>assets/auth/img/ico/favicon.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= base_url()?>assets/auth/img/ico/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= base_url()?>assets/auth/img/ico/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= base_url()?>assets/auth/img/ico/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="<?= base_url()?>assets/auth/img/ico/apple-touch-icon-57-precomposed.png">
        <!-- Bootstrap CSS file -->
        <!-- <link href="lib/bootstrap-3.3.6/css/bootstrap.min.css" rel="stylesheet" /> -->
        <!-- Bootstrap theme CSS file -->
        <!-- <link href="lib/bootstrap-3.3.6/css/bootstrap.<?=$bootstrapTheme;?>.min.css" rel="stylesheet" /> -->
        <!-- font-awesome-4.4.0 css -->
        <link rel="stylesheet" href="lib/font-awesome-4.4.0/css/font-awesome.min.css">
        <!-- Google Fonts-->
         <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500' rel='stylesheet' type='text/css'>
        <!-- Custom css -->
        <link href="<?= base_url()?>assets/auth/css/style.css" rel="stylesheet" type="text/css" media="all" />
    </head>
    <body>
            <!----start header---->
        <div class="header-wrapper">
            <h1> <strong>Lumina App</strong> </h1>
            <div class="description" style="color:white;font-weight:bolder;">
                <p>
                    Welcome to Lumina – Your Radiant Source of Illumination! At Lumina, we believe in the transformative power of light. 
                </p>
            </div>
        </div>
        <!----//End header---->
        <?= $content?>

        
        <!-- Start footer-wrapper -->
        <div class='footer-wrapper'>
            <div class='footer'><!-- Start footer -->

            </div><!-- End footer -->
            <div class='copyright'><!-- Start copyright -->
                <p>
                    <strong>COPYRIGHT &#169; 2024</strong>
                    <a href='' target="_blank"><b>Aslan</b></a> 
                </p>
            </div><!-- End copyright -->
        </div>
        </div>
        <!-- End footer-wrapper -->

        <!-- Jquery and Bootstrap Script files -->
        <script src="<?= base_url()?>assets/auth/lib/jquery-1.8.1.min.js"></script>
        <!-- public script for search form js -->
        <script src="<?= base_url()?>assets/auth/js/scripts.js"></script>

        
    </body>
</html>