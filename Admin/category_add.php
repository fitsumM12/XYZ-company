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
                <center>Add Category</center>
            </h4>

            <form class="forms-sample" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="categoryTitle">Category Title</label>
                    <input type="text" class="form-control" name="categoryTitle" id="categoryTitle" placeholder="Name"
                        required>
                </div>

                <div class="form-group">
                    <label for="categoryDescription">Category Description</label>
                    <textarea class="form-control" name="categoryDescription" id="categoryDescription" rows="4"
                        required></textarea>
                </div>
                <div class="form-group">
                    <label for="categoryAuthor">Author</label>
                    <select class='form-control' name="categoryAuthor" id='categoryAuthor' required>
                        <option>Select Author</option>
                        <?php fetchAuthor(); ?>
                    </select>

                </div>

                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" name="date" class="form-control" id="date" required>
                </div>
                <button type="submit" name="addCategory" class="btn btn-primary mr-2">Add</button>
            </form>
        </div>
    </div>
</div>


<?php include_once "partials/footer.php";  ?>