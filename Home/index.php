<?php

include_once "includes/db.inc.php";
include_once "partials/head.php";

include_once "includes/controller.php";

?>

<body data-spy="scroll" data-target="#main-menu">


    <!--Start Page loader -->
    <?php include_once "partials/preloader.php"; ?>
    <!--End Page loader -->


    <!--Start Navigation-->
    <?php include_once "partials/header.php"; ?>
    <!--End Navigation-->


    <!-- Start Slider  -->

    <?php include_once "partials/slider.php"; ?>
    <!-- End Slider -->

    <!--Start Services-->
    <?php include_once "partials/services.php"; ?>
    <!--End Services-->



    <!--Start Why Choose us-->
    <?php include_once "partials/aboutus.php"; ?>
    <!--End Why Choose us-->

    <!--Start Features-->
    <?php //include_once "partials/features.php"; ?>
    <!--End Features-->


    <!--Start Team-->
    <?php include_once "partials/team.php";  ?>
    <!--End Team-->


    <!-- Start blog-->
    <?php include_once "partials/blog.php"; ?>
    <!-- End blog-->






    <!--Start Contact-->
    <?php include_once "partials/contact.php"; ?>
    <!--End Contact-->

    <!--Start Footer-->
    <?php include_once "partials/footer.php"; ?>