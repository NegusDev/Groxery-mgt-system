<?php
if (isset($_POST['update'])) {
    $product_id = $_POST['id'];
    $product_name =  $_POST['product_name'];
    $qty =  $_POST['nop'];
    $uom = $_POST['unit'];
    $price =  $_POST['price'];

    $result = $Product->updateProduct($product_id,$product_name,$qty,$uom,$price);
    if ($result) {
        header("location:./product.php");
    } else {
        die('failed');

    }

}
