<!DOCTYPE html>
<html lang="en">

<?php include_once "partials/head.php"; ?>
<?php include_once "includes/control.php"; ?>
<?php include_once "includes/companycontrol.php"; ?>

<?php include_once "partials/nav.php"; ?>

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <?php
                                if(isset($_GET['Edit'])){
                                $rows = $company->editCompany();
                                $id = $rows['id'];
                                $description = $rows['description'];
                                $support = $rows['support'];
                                $design = $rows['design'];
                               ?>

                <div class="col-md-8">
                    <h4 class="card-title">
                        <center>Edit Service</center>
                    </h4>




                    <form class="forms-sample" method="POST" enctype="multipart/form-data">




                        <div class="form-group">
                            <label for="companyDescription">Company Description:</label>
                            <textarea class="form-control" name="companyDescription" id="companyDescription"
                                rows="10"> <?php echo $description; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="companySupport">Company Support:</label>
                            <textarea class="form-control" name="companySupport" id="companySupport"
                                rows="10"> <?php echo $support; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="companyDesign">Company Design</label>
                            <textarea class="form-control" name="companyDesign" id="companyDesign"
                                rows="10"> <?php echo $design; ?></textarea>
                        </div>


                        <button type="submit" value="<?php echo $id; ?>" name="updateCompanyDecription"
                            class=" btn btn-primary mr-2">Update</button>
                    </form>


                </div>

                <?php
                echo '<div class="col-md-4">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Setting </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <a class="dropdown-item" href="company_logo_setting?Edit='.$rows['id'].'">Update Image</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="company_edit?Edit='.$rows['id'].'">Update Content</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="company_address?Edit='.$rows['id'].'">Update Social
                            address</a>
                    </div>

                </div>
            </div>';
                            }
                            else{
                                echo "<p style='color:red; margin-top:10px;'>select a company which has to be edited!!</p>";
                            }
                            ?>
            </div>

        </div>
    </div>
</div>
<?php include_once "partials/footer.php";  ?>