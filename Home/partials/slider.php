<section id="home" class="home">
    <div class="slider-overlay"></div>
    <div class="flexslider">
        <ul class="slides scroll">

            <?php 
        $about =  new AboutUs();
         $_slider_ = $about->Slider();
         while($_slid =$_slider_->fetch_assoc()){
        ?>
            <li class="first">
                <div class="slider-text-wrapper">
                    <div class="container">
                        <div class="big"><?php echo $_slid['sl_title']; ?></div>
                        <div class="small"><?php echo $_slid['sl_subtitle']; ?></div>
                        <a href="#blog" class="middle btn btn-white">Read More</a>
                    </div>
                </div>

                <img src="images/slider/<?php echo $_slid['sl_image']; ?>" alt="Zemen Tech">
            </li>

            <?php } ?>

        </ul>
    </div>
</section>