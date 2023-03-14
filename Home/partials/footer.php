<?php 
$obj = new AboutUs();
$function = $obj->fetchAboutUs();
$company = $function->fetch_assoc();
?><footer class="container-fluid bg-grey py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo-part">
                            <h2 class="w-50 logo-footer" style="color:white;">
                                Zemen tech
                            </h2>
                            <p style="color:white;"><?php echo $company['place']; ?>, Ethiopia</p>
                            <p style="color:white;"><?php echo $company['email']; ?></p>
                            <p style="color:white;"><?php echo $company['contact']; ?></p>
                            <p style="color:white;"> <?php echo $company['contact2']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-6 px-4">
                        <h6 style="color:white;"> About Company</h6>
                        <p style="color:white;" class="text-justify">ZemenTech works on developing website,
                            android app, and
                            providing a tech centeric
                            service.</p>
                        <a href="#blog" class="btn-footer"> More Info </a><br>
                        <a href="#contact" class="btn-footer"> Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">

                    <div class="col-md-12">
                        <h6 style="color:white;"> Social Media</h6>

                        <div class="social">

                            <p style="color:white;">follow us:</p>
                            <a href="<?php echo $company['instagram']; ?>" target="_blank"><i class="fa fa-instagram"
                                    aria-hidden="true"></i></a>
                            <a href="<?php echo $company['facebook']; ?>" target="_blank"><i class="fa fa-facebook"
                                    aria-hidden="true"></i></a>
                            <a href="<?php echo $company['twitter']; ?>" target="_blank"><i class="fa fa-twitter"
                                    aria-hidden="true"></i></a>
                            <a href="<?php echo $company['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
<footer>
    <div class="container">
        <div class="row">
            <!--Start copyright-->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="copyright">
                    <p class="text-center" style="color:white;">Copyright © 2021 All Rights reserved by: <a
                            style="color:blue;" href="index">Zemen Tech</a>
                    </p>
                </div>
            </div>
            <!--End copyright-->

        </div>
        <!-- /.row-->
    </div>
    <!-- /.container-->
</footer>
<!--End Footer-->

<a href="#" class="scrollup"> <i class="fa fa-chevron-up"> </i> </a>

<!--Plugins-->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/jquery.easypiechart.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/customjs.js"></script>
</body>

</html>