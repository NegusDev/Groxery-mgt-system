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
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light bg-dark text-white">
        <?php
            if (isset($_SESSION['admin'])) {
                $user = $_SESSION['admin'];
                echo '
                <div class="mt-2">
                    <a href="index.php" class=" text-success"><i class="fas fa-home fa-2x pe-2"></i></a>
                    <a href="../order.php" class="text-danger"><i class="fas fa-th-list fa-2x"></i></a>
                </div>
                <ul class="nav list-unstyled">
                        <li class="nav-item">
                            <a href="" class="nav-link text-capitalize"><i class="fas fa-user-astronaut fa-2x icon"></i> ' .$user.'</a>
                        </li>
                        <li class="nav-item">
                            <a href="./logout.php" class="nav-link text-capitalize"><i class="fas fa-sign-out-alt fa-2x icon"></i> Log Out</a>
                        </li>
                        </ul>';
             }elseif (isset($_SESSION['salesman'])) {

                $mm = $_SESSION['salesman'];

                echo '
                <div class="mt-2">
                    <a href="sales.php" class=" text-success"><i class="fas fa-homeh fa-2x pe-2"></i></a>
                    <a href="sales.php" class="text-danger"><i class="fas fa-th-list fa-2x"></i></a>
                </div>
                <ul class="nav list-unstyled">
                    <li class="nav-item">
                       <a href="" class="nav-link text-capitalize"><i class="fas fa-user fa-2x icon"></i> ' .$mm.'</a>
                   </li>
                    <li class="nav-item">
                        <a href="logout_employee.php" class="nav-link text-capitalize"><i class="fas fa-sign-out-alt fa-2x icon"></i> Log Out</a>
                    </li>
                    </ul>';


            } else {
                echo ' 
                <div class="m-auto ">
                        <h2 class="nav-link text-capitalize bol">Negus Stores</h2>
                 </div> 
                    
                ';
            }
            ?>


    </div>
</header>


<!-- main -->
<main id="main">
    <div class="row">
        <div class="col-md-2">
        <?php 
            if (isset($_SESSION['admin'])) {
            $user = $_SESSION['admin'];  
            echo '
            <div class="list-group fw-bold bg-light" style="height:100%;">
                <a href="index.php" class="list-group-item list-group-item-primary text-capitalize py-3 text-dark ">Dashboard</a>
                <a href="admin.php" class="list-group-item list-group-item-primary text-capitalize py-3 text-dark ">' .$user.' profile</a>
                <a href="sales.php" class="list-group-item list-group-item-primary text-capitalize py-3 text-dark ">employees</a>
                <a href="product.php" class="list-group-item list-group-item-primary text-capitalize py-3 text-dark ">Products</a>
                <a href="order_details.php" class="list-group-item list-group-item-primary text-capitalize py-3 text-dark ">order lists</a>
                <a href="sold.php" class="list-group-item list-group-item-primary text-capitalize py-3 text-dark ">sales</a>
                <a href="uom.php" class="list-group-item list-group-item-primary text-capitalize py-3 text-dark ">Uom</a>
                <a href="admin/" class="list-group-item list-group-item-primary text-capitalize py-3 text-dark ">Income</a>
            </div>';
            }elseif (isset($_SESSION['salesman'])) {
                $emp = $_SESSION['salesman'];
                echo '
           ';
            }else {
                echo '
                <div class="list-group bg-light fw-bold" style="height:90vh;">
                    <a href="index.php" class="list-group-item list-group-item-primary text-capitalize py-3 text-dark">Login for Admins only</a>
                    <a href="employee_login.php" class="list-group-item list-group-item-primary text-capitalize py-3 text-dark">Login for employees</a>
                </div> 
                ';
            }

        ?>    
        </div>


