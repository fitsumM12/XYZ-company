<?php 
//create team object class name
$tm_ob = new TeamMembers();
?>


<section id="team" class="section">
    <div class="container">
        <div class="row">

            <div class="title-box text-center">
                <h2 class="title">Team</h2>
            </div>

        </div>

        <!-- Team -->
        <div class="team-items team-carousel">
            <!-- Team Member #1 -->
            <?php 
                     
            $result = $tm_ob->FetchTeamMembers();
            while($row =$result->fetch_assoc()){
            ?>
            <div class="item tm_photo">
                <img src="images/team/<?php echo $row['tm_photo']; ?>" alt="" />
                <h4><?php echo $row['tm_name']; ?></h4>
                <h5><?php echo $row['tm_profession']; ?></h5>
                <p><?php echo "";//$row['tm_description']; ?> </p>

                <div class="socials">
                    <?php
                   $tm_addrs = $tm_ob->getTeamAddress($row['tm_id']);
                ?>
                    <ul>
                        <li><a class="facebook" href="<?php echo $tm_addrs['facebook'];?>"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="<?php echo $tm_addrs['telegram'];?>"><i
                                    class="fa fa-twitter"></i></a></li>
                        <li><a class="linkedin" href="<?php echo $tm_addrs['linkedin'];?>"><i
                                    class="fa fa-linkedin"></i></a></li>
                        <li><a class="google-plus" href="<?php echo $tm_addrs['gmail'];?>"><i
                                    class="fa fa-google-plus"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- End Member -->
            <?php } ?>
        </div>
        <!-- End Team -->
    </div>
    <!-- End Content -->
</section>