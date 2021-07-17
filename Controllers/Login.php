<?php
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $Salesman->getAdminInfo( 'admin',$username,$password);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {

            echo "<script>alert('You have logged in as an Admin')</script>";

            $_SESSION['admin'] = $_POST['username'];

            header("Location:admin/index.php");
            exit();


        }else {
            echo "<script>alert('Invalid Username or Password')</script>";
        }
    }
}