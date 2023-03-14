<!DOCTYPE html>
<html lang="en">

<?php include_once "includes/servicecontrol.php"; ?>
<?php include_once "partials/head.php"; ?>
<?php include_once "includes/control.php"; ?>
<?php include_once "partials/nav.php"; ?>

<div class="col-md-8 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <center>Add Service</center>
            </h4>

            <form class="forms-sample" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="serviceTitle">Service Title</label>
                    <input type="text" class="form-control" name="serviceTitle" id="serviceTitle" placeholder="Name"
                        required>
                </div>

                <div class="form-group">
                    <label for="serviceDescription">Service Description</label>
                    <textarea class="form-control" maxlength="200" minlength="195" name="serviceDescription"
                        id="ServiceDescription" rows="4" required></textarea>
                </div>
                <div class="form-group">
                    <label for="serviceAuthor">Author</label>
                    <select class='form-control' name="serviceAuthor" id='serviceAuthor' required>
                        <option>Select Author</option>
                        <?php fetchAuthor(); ?>
                    </select>

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
                        <option value="fa fa-exclamation-circle">Message</option>
                        <option value=" icon-shield">Web Design</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" class="form-control" id="date" required>
                </div>
                <button type="submit" name="addService" class="btn btn-primary mr-2">Add</button>
            </form>
        </div>
    </div>
</div>



<?php include_once "partials/footer.php";  ?>