<?php
if (isset($_POST['submit'])) {
    $data = array(
        'salesman_name' => $_POST['employee_name'],
        'salary' => $_POST['salary'],
        'profile' => $_FILES['image']['name']
    );

    $result = $Salesman->CreateEmployee('salesman', $data);
    if ($result) {
        move_uploaded_file($_FILES['image']['tmp_name'], "img/$data");
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
    $salesman_id = $_POST['id'];
    $salesman_name = $_POST['employee_name'];
    $salary =  $_POST['salary'];
    $profile =  $_FILES['image']['name'];

    $result = $Salesman->updateEmployee($salesman_id, $salesman_name, $salary, $profile);
    if ($result) {
        echo "<script>alert('Updated Successfully')</script>";
        // RELOAD PAGE
        header("location:./sales.php");

    } else {
        die('failed');
    }
}