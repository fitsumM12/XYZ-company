<?php 
    require_once "includes/db.inc.php";
    $sql = "SELECT * FROM `posts` where `status`='approved' Limit 10";
    $result = mysqli_query($conn,$sql);
?>
<section id="blog" class="section">
    <div class="container">
        <div class="row">

            <div class="title-box text-center">
                <h2 class="title">Latest Blog</h2>
            </div>

            <?php while($row = mysqli_fetch_assoc($result)){?>
            <div class="col-md-4">
                <div class="blog-post">
                    <div class="post-media">
                        <img src="images/blog/<?php echo $row['p_photo'];?>" width="100%" alt="">
                    </div>
                    <div class="post-desc">
                        <h4><?php print($row['p_title']);?></h4>
                        <?php 
                        $p_author =$row['p_author'];
                        $team_sql = "SELECT * FROM `team_members` where tm_id='$p_author'";
                        $team_result = mysqli_query($conn,$team_sql);
                        $team_row = mysqli_fetch_array($team_result);  ?>
                        <h5><?php echo $row['p_date'] ."/".$team_row['tm_name'];?></h5>
                        <p><?php //echo $row['p_description'];?></p>
                        <a href="blog?post_id=<?php echo $row['p_id'];?>" class="btn btn-gray-border">Read More</a>
                    </div>
                </div>
            </div>
            <?php } ?>

        </div>
        <!--/.row-->
    </div>
    <!--/.container-->
</section>