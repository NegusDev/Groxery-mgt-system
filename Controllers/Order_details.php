<?php

//delete
if (!isset($_SESSION['admin'])) {
    header("Location:./index.php" );
}else{
    if (isset($_POST['del_id'])) {

        $del_id = $_POST['del_id'];
        
        if ($OrderDetails->deleteOrder($del_id)) {
        echo "deleted";
            // RELOAD PAGE
            header("Location:" . $_SERVER['PHP_SELF']);
        }else {
            die('failed');
        }
    }
}

