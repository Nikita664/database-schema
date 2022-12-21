<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- AWesome Font -->
    <link rel="stylesheet" href="../css/custom.css">

    <!-- TOP NAVBAR-->
    <nav class="navbar navbar-dark fixed-top bg-danger
     flex-md-nowrap p-0 shadow"><a class="navbar-brand
      col-sm-3 col-md-2 mr-0" href="dashboard.php">OVELOSEC</a></nav>
    <!-- Start Container -->
    <div class="container-fluid" style="margin-top: 40px;">
        <!-- Start row -->
        <div class="row">
            <!-- start Side  Bar  column -->
            <nav class="col-sm-2 bg-light sidebar py-5">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link <?php if (PAGE == 'dashboard') {
                                                                    echo 'active';
                                                                } ?>" href="dashboard.php"><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link <?php if (PAGE == 'admin') {
                                                                    echo 'active';
                                                                } ?>" href="admin.php"><i class="fas fa-users"></i>Admin</a></li>
                        <li class="nav-item"><a class="nav-link <?php if (PAGE == 'changepass') {
                                                                    echo 'active';
                                                                } ?>" href="changepass.php"><i class="fas fa-key"></i>Change Password</a></li>

                        <li class="nav-item"><a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt"></i>Log Out</a></li>
                    </ul>
                </div>
            </nav>
            <!-- End Side Bar  column-->