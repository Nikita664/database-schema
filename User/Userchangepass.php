<?php
define('TITLE', 'Change Password');
define('PAGE', 'Userchangepass');
include('includes/header.php');
include('../dbConnection.php');
session_start();
if ($_SESSION['is_login']) {
    $uEmail = $_SESSION['uEmail'];
} else {
    echo "<script> location.href= 'UserLogin.php'</script>";
}
$uEmail = $_SESSION['uEmail'];
if (isset($_REQUEST['passupdate'])) {
    if ($_REQUEST['uPassword'] == "") {
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    } else {
        $uPass = $_REQUEST['uPassword'];
        $sql = "UPDATE userlogin_tb SET u_password = '$uPass' WHERE u_email = '$uEmail'";
        if ($conn->query($sql) == TRUE) {
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Updated Successfully</div>';
        } else {
            $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Unable to Update</div>';
        }
    }
}


?>
<!-- Start User Change Password from 2nd column -->
<div class="col-sm-9 col-md-10">
    <form class="mt-5 mx-5" action="" method="POST">
        <div class="form-group">
            <label for="inputEmail">Email</label><input type="email" class="form-control" id="inputEmail" value="<?php echo $uEmail; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="inputnewpassword">New Password</label><input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="uPassword">
        </div>
        <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
        <?php if (isset($passmsg)) {
            echo $passmsg;
        } ?>
    </form>
</div>
<!-- End User Change Password from 2nd column -->

<?php
include('includes/footer.php');
?>