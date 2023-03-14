<?php 
//create team object class name
$srvc = new Services();
$service = $srvc->fetchService();
?>

<section id="services" class="section">
    <div class="container">
        <div class="row">

            <div class="title-box text-center">
                <h2 class="title">Services</h2>
            </div>

            <?php
            while($row1 =$service->fetch_assoc()){
            ?>
            <!--Services Item-->
            <div class="col-md-4">
                <div class="services-box">
                    <div class="services-icon"> <?php echo "<i class=".$row1['s_image']."></i>"; ?> </div>
                    <div class="services-desc">
                        <h4><?php echo $row1['s_title']; ?></h4>
                        <p class="text-justify"> <?php echo  $row1['s_description']; ?></p>
                    </div>
                </div>
            </div>
            <!--End services Item-->

            <?php } ?>
        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>