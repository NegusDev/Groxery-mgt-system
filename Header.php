<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSM</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="assets/css/aos.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <?php
            if (isset($_SESSION['admin'])) {
                $user = $_SESSION['admin'];
                echo '
                <div class="m-auto">
                    <a href="index.php" class=" text-success"><i class="fas fa-home fa-2x pe-2"></i></a>
                    <a href="order.php" class="text-danger"><i class="fas fa-th-list fa-2x"></i></a>
                </div>
                <ul class="nav m-auto list-unstyled">
                        <li class="nav-item">
                            <a href="" class="nav-link text-capitalize"><i class="fas fa-user-astronaut fa-2x icon"></i>'.$user.'</a>
                        </li>
                        <li class="nav-item">
                            <a href="./logout.php" class="nav-link text-capitalize"><i class="fas fa-sign-out-alt fa-2x icon"></i> Log Out</a>
                        </li>';
             }elseif (isset($_SESSION['salesman'])) {

                    $user = $_SESSION['salesman'];

                    echo '
                    <div class="m-auto">
                    <a href="index.php" class=" text-success"><i class="fas fa-home fa-2x pe-2"></i></a>
                    <a href="order.php" class="text-danger"><i class="fas fa-th-list fa-2x"></i></a>
                </div>
                <ul class="nav m-auto list-unstyled">
                <li class="nav-item">
                           <a href="" class="nav-link text-capitalize"><i class="fas fa-user-astronaut fa-2x icon"></i>'.$user.'</a>
                       </li>
                        <li class="nav-item">
                            <a href="./logout.php" class="nav-link text-capitalize"><i class="fas fa-sign-out-alt fa-2x icon"></i> Log Out</a>
                        </li>';


            }else {
                echo ' <li class="nav-item">
                            <a href="employee_login.php" class="nav-link text-capitalize">Login for Employee</a>
                        </li> 
                        <li class="nav-item">
                            <a href="../adminlogin.php" class="nav-link text-capitalize">Login for Admin</a>
                        </li> 
                        </ul>';
            }
            ?>


    </div>
</header>


<!-- main -->
<main id="main">

