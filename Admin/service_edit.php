<!DOCTYPE html>
<html lang="en">

<?php include_once "partials/head.php"; ?>
<?php include_once "includes/control.php"; ?>
<?php include_once "partials/nav.php"; ?>

<?php include_once "includes/servicecontrol.php"; ?>

<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <center>Edit Service</center>
            </h4>
            <?php
                                if(isset($_GET['Edit'])){
                                $rows =$service->editService();
                                $s_id = $rows['s_id'];
                                $s_title = $rows['s_title'];
                                $s_description = $rows['s_description'];
                                $s_author = $rows['s_author'];
                                $s_status = $rows['s_status'];
                                $s_date = $rows['s_date'];
                                }
                                else{
                                    echo "<p style='color:red; margin-top:10px;'>select a service which has to be edited!!</p>";
                                }
                                ?>



            <form class="forms-sample" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="serviceTitle">Service Title</label>
                    <input type="text" class="form-control" name="serviceTitle" id="serviceTitle"
                        value="<?php echo $s_title; ?>" placeholder="Name" required>
                </div>


                <div class="form-group">
                    <label for="serviceDescription">Service Description</label>
                    <textarea class="form-control" maxlength="200" minlength="195" name="serviceDescription"
                        id="ServiceDescription" rows="4"> <?php echo $s_description; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="serviceIcon">Icon:</label>
                    <select class='form-control' name="serviceIcon" id='serviceIcon' required>
                        <option value="icon-shield">Web Design</option>
                        <option value="icon-basket">Web Development</option>
                        <option value="icon-hotairballoon">CEO</option>
                        <option value="icon-global">Graphics Design</option>
                        <option value="icon-target">Content Writting</option>
                        <option value="ervices-icon">HTML basics</option>
                        <option value="icon-shield">Web Design</option>
                        <option value="icon-shield">Web Design</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="serviceAuthor">Author</label>
                    <select class='form-control' name="serviceAuthor" id='serviceAuthor'>
                        <?php fetchAuthor(); ?>
                    </select>

                </div>


                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" value="<?php echo $s_date; ?>" name="date" class="form-control" id="date">
                </div>
                <button type="submit" value="<?php echo $s_id; ?>" name="updateService"
                    class="btn btn-primary mr-2">Update</button>
            </form>





        </div>
    </div>
</div>

<?php include_once "partials/footer.php";  ?>