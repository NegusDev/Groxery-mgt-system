<?php

 // add new product
$errors = "";
if (!empty($_POST['submit'])) {
    $data = array(
        'product_name' => $_POST['product_name'],
        'number_of_produt' => $_POST['nop'],
        'uom_id' => $_POST['unit'],
        'price_per_unit' => $_POST['price']
    );

    if (empty($data['product_name'])) {
        $errors = "Enter product name";
    } elseif (empty($data['number_of_produt'])) {
        $errors = "Enter Quantity";
    } elseif (empty($data['uom_id'])) {
        $errors = "Select Unit";
    } elseif (empty($data['price_per_unit'])) {
        $errors = "Enter price";
    }

    if ($errors === "") {
        $result = $Product->createProduct('product', $data);
        if ($result) {
            $errors = "Product Added Successfully";
            // RELOAD PAGE
            header("Location:" . $_SERVER['PHP_SELF']);

        } else {
            $errors = $dbc->error;
        }
    }

}

//update existing product
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

//delete product
if (isset($_POST['del_id'])) {
    $del_id = $_POST['del_id'];
    if ($Product->deleteProduct($del_id,'product')) {
       echo "deleted";
        // RELOAD PAGE
        header("Location:" . $_SERVER['PHP_SELF']);
    }else {
        die('failed');
    }
}



// if (isset($_POST['product_id'])) {

//     if ($_POST['product_id'] != null) {

//         $result = $Product->getProductPrice($_POST['product_id']) ?? 0;

//     }
// }
