<!DOCTYPE html>
<html lang="en">

<?php include_once "partials/head.php"; ?>
<?php include_once "includes/control.php"; ?>


<?php include_once "includes/categorycontrol.php"; ?>
<?php include_once "partials/nav.php"; ?>


<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <center>Edit Service</center>
            </h4>
            <?php
                                if(!isset($_GET['EditCategory'])){
                               
                                    echo "<p style='color:red; margin-top:10px;'>select a service which has to be edited!!</p>";
                                }
                                else{
                                    $rows = $category->editCategory();
                                    $cat_id = $rows['cat_id'];
                                    $cat_title = $rows['cat_title'];
                                    $cat_description = $rows['cat_description'];
                                    $cat_author = $rows['cat_author'];
                                    $cat_status = $rows['cat_status'];?>

            <form class="forms-sample" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="categoryTitle">Cetagory Title</label>
                    <input type="text" class="form-control" name="categoryTitle" id="categoryTitle"
                        value="<?php echo $cat_title; ?>" placeholder="Name" required>
                </div>


                <div class="form-group">
                    <label for="categoryDescription">Category Description</label>
                    <textarea class="form-control" name="categoryDescription" id="categoryDescription"
                        rows="4"> <?php echo $cat_description; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="categoryAuthor">Author</label>
                    <select class='form-control' name="categoryAuthor" required id='categoryAuthor'>
                        <?php fetchAuthor(); ?>
                    </select>

                </div>
                <button type="submit" value="<?php echo $cat_id; ?>" name="updateCategory"
                    class="btn btn-primary mr-2">Update</button>
            </form>

            <?php
                                }
                                ?>


        </div>
    </div>
</div>
<?php include_once "partials/footer.php";  ?>