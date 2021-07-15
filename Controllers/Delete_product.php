<?php

if (isset($_POST['del_id'])) {
    $del_id = $_POST['del_id'];
    if ($Admin->deleteProduct($del_id,'product')) {
       echo "deleted";
        // RELOAD PAGE
        header("Location:" . $_SERVER['PHP_SELF']);
    }else {
        die('failed');
    }
}