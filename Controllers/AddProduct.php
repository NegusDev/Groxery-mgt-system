<?php


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




