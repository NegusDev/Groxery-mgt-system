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
    if ($Salesman->deleteEmployee($del_id)) {
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