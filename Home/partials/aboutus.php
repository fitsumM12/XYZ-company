<?php 

$_about_res = $about->fetchAboutUs();

?>
<section id="why-choose" class="section">
    <div class="container">
        <div class="row">

            <div class="title-box text-center">
                <h2 class="title">About Us</h2>
            </div>

            <!--start tabs-->
            <div class="col-md-6">
                <div class="tabs tabs-main">
                    <ul class="nav nav-tabs">

                        <li class="active"><a href="#one" data-toggle="tab">Company</a></li>
                        <li><a href="#two" data-toggle="tab">Design</a></li>
                        <li><a href="#three" data-toggle="tab">Support</a></li>
                    </ul>
                    <div class="tab-content">
                        <?php 
                        while($_row_ = $_about_res->fetch_assoc()){
                    ?>
                        <!--Start Tab Item #1 -->
                        <div class="tab-pane in active" id="one">
                            <p class="text-justify">
                                <?php 
                                echo $_row_['description'];
                            ?>
                            </p>
                        </div>
                        <div class="tab-pane " id="two">
                            <p class="text-justify">
                                <?php 
                                echo $_row_['design'];
                            ?>
                            </p>
                        </div>
                        <!-- End Tab -->

                        <!--Start Tab Item #2 -->

                        <!-- End Tab -->

                        <!--Start Tab Item #3 -->
                        <div class="tab-pane" id="three">
                            <p class="text-justify">
                                <?php 
                                echo $_row_['support'];
                            ?>
                            </p>
                        </div>
                        <!-- End Tab -->
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- End Tabs-->

            <!--Start Accordion-->
            <div class="col-md-6">
                <div class="panel-group accordion-main" id="accordion">
                    <!--About accordion #1-->
                    <?php
                    $_categor_ = $srvc->Categories();
                    while($_categ =$_categor_->fetch_assoc()){
                   ?>
                    <div class="panel">
                        <div class="panel-heading collapsed" data-toggle="collapse" data-parent="#accordion"
                            data-target="#collapseOne<?php echo $_categ['cat_id']; ?>">
                            <h6 class="panel-title accordion-toggle">
                                <?php echo $_categ['cat_title']; ?>
                            </h6>
                        </div>
                        <div id="collapseOne<?php echo $_categ['cat_id']; ?>" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p><?php echo $_categ['cat_description']; ?>
                                </p>

                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
</section>