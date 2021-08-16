<?php


if (isset($_POST['save'])) {
    $data = [
        // i want to access to access the array value in the order_id array key which is on null see line 15
        "order_id" => 39,
        // end
        "customer" => $_POST['customer'],
        "total" => $_POST['grand_total'],
        // "datetime" => date('Y-m-d H:i:s')
    ];
    
    $order_id = $_GET['order_id'];
    $prodct_id = $_POST['product_name']; 
    $quantity = $_POST['product-qty']; 
    $total = $_POST['product-total']; 

//    print_r($data);
//    print_r($params);

    $result = $Order->insertIntoOrder('orders', $data);
    $result_details = $OrderDetails->insertIntoOrderDetails('order_details',  $order_id,$product_id,$quantity,$total);
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