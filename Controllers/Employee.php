<?php
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
       'service_title' => $_POST['service_title'],
        'service_description' => $_POST['service_description'],
        'service_icon' => $_POST['service_icon'],
        'service_id' => $_POST['service_id']
    ];

    $result = $Service->updateService ($id,$data);
    if ($result) {
        echo "<script>alert('Message Sent successfully')</script>";
        // RELOAD PAGE
        header("location:./services.php");

    } else {
        die('failed');
    }
}