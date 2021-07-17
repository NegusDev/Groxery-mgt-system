<?php
session_start();

if (isset($_POST['login'])) {

    $username = $_POST['employee_name'];
    $password = $_POST['password'];

    $result = $Salesman->getAdminInfo( 'salesman',$username,$password);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {

            echo "<script>alert('You have logged in as an Employee')</script>";

            $_SESSION['salesman'] = $_POST['username'];

            header("Location:./index.php");
            exit();


        }else {
            echo "<script>alert('Invalid Username or Password')</script>";
        }
    }
}
if (isset($_POST['submit'])) {
    $data = array(
        'salesman_name' => $_POST['employee_name'],
        'salary' => $_POST['salary'],
        'profile' => $_POST['image']
    );

    $result =$Salesman->CreateEmployee('salesman', $data);
    if ($result) {
        echo "<script>alert('Added New Employee')</script>";
        // RELOAD PAGE
        header("Location:" . $_SERVER['PHP_SELF']);

    } else {
        die('failed');
    }
}
//delete
if (isset($_POST['del_id'])) {
    $del_id = $_POST['del_id'];
    if ($Admin->deleteInfo($del_id,'services')) {
       echo "deleted";
        // RELOAD PAGE
        header("Location:" . $_SERVER['PHP_SELF']);
    }else {
        die('failed');
    }
}

if (isset($_POST['update'])) {
    $id ='';
    $data = [ 
    'salesman_name' => $_POST['employee_name'],
    'salary' => $_POST['salary'],
    'profile' => $_POST['image']
    ];

    $result = $Service->updateService ($id,$data);
    if ($result) {
        echo "<script>alert('Updated Successfully')</script>";
        // RELOAD PAGE
        header("location:./services.php");

    } else {
        die('failed');
    }
}