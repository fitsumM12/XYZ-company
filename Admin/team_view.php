<!DOCTYPE html>
<html lang="en">

<?php include_once "partials/head.php"; ?>
<?php include_once "includes/control.php"; ?>
<?php include_once "includes/teamcontrol.php"; ?>

<?php include_once "partials/nav.php"; ?>

<!-- partial -->
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Team Member</h4>
            <p class="card-description">View and<code>edit/delete option</code>

            </p>
            <?php   
            if($_SESSION['tm_role']=='admin'){
                ?>
            <p class="text-right"><button class="btn btn-success" id="approveMember">Approve</button>&nbsp;&nbsp;&nbsp;
                <button class="btn badge-warning" id="unapproveMember">unApprove</button>&nbsp;&nbsp;&nbsp;
                <button class="btn btn-danger" id="deleteMember">Delete</button>
            </p>

            <?php
            }
            
            ?>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Select</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        <?php $team->viewMember(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<?php include_once "partials/footer.php";  ?>