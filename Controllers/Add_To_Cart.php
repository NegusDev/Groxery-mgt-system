<?php


if (isset($_POST['save'])) {
    $data = [
        // i want to access to access the array value in the order_id array key which is on null see line 15
        // "order_id" => null,
        // end
        "customer" => $_POST['customer'],
        "total" => $_POST['grand_total'],
        // "datetime" => date('Y-m-d H:i:s')
    ];
    $params = [
        // here in this array 
         "order_id" => $data['order_id'],
        // end
        "product_id" => (int)$_POST['product_name'],
        "quantity" => (float)$_POST['product-qty'],
        "total_price" => (int)$_POST['product-total']
    ];

//    print_r($data);
//    print_r($params);

    $result = $Order->insertIntoOrder('orders', $data);
    $result_details = $OrderDetails->insertIntoOrderDetails('order_details', $params);
    if ($result && $result_details) {
        // RELOAD PAGE
        header("Location:" . $_SERVER['PHP_SELF']);
    } else {
        die('failed');
    }

}

$output = "";
if (isset($_POST['product_id'])) {
    if ($_POST['product_id'] != "") {
        $Product->getProductById($_POST['product_id']);
        $output = $product['price_per_unit'];
    }

    return $output;
}