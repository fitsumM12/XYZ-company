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
                                
                               ?>

                <div class="col-md-8">
                    <h4 class="card-title">
                        <center>Edit Company Logo</center>
                    </h4>



                    <form class="forms-sample" method="POST" enctype="multipart/form-data">
                        <img src="../Home/images/logo/<?php echo $rows['logo']; ?>" width="100%" height="50%"
                            alt="No image">
                        <br>
                        <div class="btn btn-success" style="position: relative; overflow: hidden;">
                            select image
                            <input type="file" name="img" accept="image/*" required
                                style=" position: absolute;  opacity: 0; right: 0; top: 0;" />
                        </div>
                        <div class=" btn  btn-primary text-right">
                            <button type="submit" class="btn" value="<?php echo $rows['id']; ?>"
                                name="updateCompanyLogo">Update</button>
                        </div>

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