<!doctype html>
<html class="no-js" lang="vi-vn">
 
<head>
<base href="http://localhost/PHPMVC/" ?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>tree shop </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="">

    <link rel="apple-touch-icon" href="./public/public_home/apple-touch-icon.png">
    <!-- Place icon.png in the root directory -->
    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>
    <!-- all css here -->
    <!-- bootstrap v3.3.6 css -->
    <link rel="stylesheet" href="./public/public_home/css/bootstrap.min.css">
    <!-- animate css -->
    <link rel="stylesheet" href="./public/public_home/css/animate.css">
    <!-- pe-icon-7-stroke -->
    <link rel="stylesheet" href="./public/public_home/css/materialdesignicons.min.css">
    <!-- pe-icon-7-stroke -->
    <link rel="stylesheet" href="./public/public_home/css/jquery.simpleLens.css">
    <!-- jquery-ui.min css -->
    <link rel="stylesheet" href="./public/public_home/css/jquery-ui.min.css">
    <!-- meanmenu css -->
    <link rel="stylesheet" href="./public/public_home/css/meanmenu.min.css">
    <!-- nivo.slider css -->
    <link rel="stylesheet" href="./public/public_home/css/nivo-slider.css">
    <!-- owl.carousel css -->
    <link rel="stylesheet" href="./public/public_home/css/owl.carousel.css">
    <!-- style css -->
    <link rel="stylesheet" href="./public/public_home/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="./public/public_home/css/responsive.css">
    <!-- modernizr js -->
    <script src="./public/public_home/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!-- header section start -->
    <?php
    require_once "./mvc/views/block/home_header.php" 
    ?>
    <!-- header section end -->

    <!-- slider-section-start -->
    <?php
    require_once "./mvc/views/pages/".$data["page"].".php"
    ?>
    <!-- slider section end -->

    <!-- footer section start -->
    <?php
    require_once "./mvc/views/block/home_footer.php" 
    ?>
    <!-- footer section end -->
    <!-- all js here -->
    <!-- jquery latest version -->
    <script src="./public/public_home/js/vendor/jquery-1.12.3.min.js"></script>
    <!-- bootstrap js -->
    <script src="./public/public_home/js/bootstrap.min.js"></script>
    <!-- owl.carousel js -->
    <script src="./public/public_home/js/owl.carousel.min.js"></script>
    <!-- meanmenu js -->
    <script src="./public/public_home/js/jquery.meanmenu.js"></script>
    <!-- countdown JS -->
    <script src="./public/public_home/js/countdown.js"></script>
    <!-- nivo.slider JS -->
    <script src="./public/public_home/js/jquery.nivo.slider.pack.js"></script>
    <!-- simpleLens JS -->
    <script src="./public/public_home/js/jquery.simpleLens.min.js"></script>
    <!-- jquery-ui js -->
    <script src="./public/public_home/js/jquery-ui.min.js"></script>
    <!-- load-more js -->
    <script src="./public/public_home/js/load-more.js"></script>
    <!-- plugins js -->
    <script src="./public/public_home/js/plugins.js"></script>
    <!-- main js -->
    <script src="./public/public_home/js/main.js"></script>
</body>

</html>