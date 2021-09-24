<?php

if (!isset($_SESSION['salesman']))  {
      // REDIRECT TO THE LOGIN PAGE
      header("Location:./index.php" );
}else {
    if (isset($_POST['save'])) {

        $order = [
            "customer" => $_POST['customer'],
            "total" => $_POST['grand_total']
        ];
        
        $products = [];
    
        foreach ($_POST['products'] as $product_id => $product) {
            $products[] = ['product_id' => $product_id, 'qty' => $product['qty'], 'total_price' => $product['total_price']];
        }
    
        $result = $Order->insertIntoOrder('orders', $order, $products);
        
        if ($result) {
        
                 // RELOAD PAGE
                header("Location:" . $_SERVER['PHP_SELF']);
                   
        }else {
            die('failed');
        }
    
    }

}



