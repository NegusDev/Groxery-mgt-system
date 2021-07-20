<?php
if (isset($_POST['submit'])) {
    $data = array(
        'uom_name' => $_POST['uom_name']
    );

    $result =$Salesman->CreateEmployee('uom', $data);
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
    if ($Uom->deleteUom($del_id)) {
       echo "deleted";
        // RELOAD PAGE
        header("Location:" . $_SERVER['PHP_SELF']);
    }else {
        die('failed');
    }
}

if (isset($_POST['update'])) {

    $uom_id = $_POST['id'];
    $uom_name = $_POST['uom_name'];

    $result = $Uom->updateUom($uom_id,$uom_name);
    if ($result) {
        echo "<script>alert('Updated Successfully')</script>";
        // RELOAD PAGE
        header("location:./uom.php");

    } else {
        die('failed');
    }
}