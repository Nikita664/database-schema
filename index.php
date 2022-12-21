<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <title>OVELOSEC</title>
</head>

<body>
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-danger pl-5 fixed-top">
        <a href="index.php" class="navbar-brand">OVELOSEC</a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myMenu">
            <ul class="navbar-nav pl-5 custom-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>

                <li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
                <li class="nav-item"><a href="User/UserLogin.php" class="nav-link">Login</a></li>

            </ul>
        </div>
    </nav> <!-- End Navigation -->

    <!-- Start Header Jumbotron-->
    <header class="jumbotron back-image" style="background-image: url(images/pic1.png);">
        <div class="myclass mainHeading">
            <h1 class="text-uppercase text-danger font-weight-bold">Welcome to OVELOSEC</h1>
            <p class="font-italic">Clients Happiness is our Aim</p>
            <a href="User/UserLogin.php" class="btn btn-success mr-4">Login</a>
            <a href="#registration" class="btn btn-danger mr-4">Sign Up</a>
        </div>
    </header> <!-- End Header Jumbotron -->



    <!-- Start Registration  -->
    <?php include('userRegistration.php') ?>
    <!-- End Registration  -->



    <!-- Start Footer-->
    <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
        <div class="container">
            <!-- Start Footer Container -->
            <div class="row py-3">
                <!-- Start Footer Row -->
                <div class="col-md-6">
                    <!-- Start Footer 1st Column -->
                    <span class="pr-2">Follow Us: </span>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
                </div> <!-- End Footer 1st Column -->

                <div class="col-md-6 text-right">
                    <!-- Start Footer 2nd Column -->
                    <small> Designed by Nikita &copy; 2022.
                    </small>
                    <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
                </div> <!-- End Footer 2nd Column -->
            </div> <!-- End Footer Row -->
        </div> <!-- End Footer Container -->
    </footer> <!-- End Footer -->

    <!-- Boostrap JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>

</html>