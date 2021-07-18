<?php
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['employee_name'];
    $password = $_POST['password'];

    $result = $Salesman->getEmployeeInfo( 'salesman',$username,$password);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {

            echo "<script>alert('You have logged in as an Employee')</script>";

            $_SESSION['salesman'] = $_POST['employee_name'];

            header("Location:index.php");
            exit();

        }else {
            echo "<script>alert('Invalid Username or Password')</script>";
        }
    }
}