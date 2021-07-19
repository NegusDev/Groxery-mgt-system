<?php
session_start();
require_once('Config.php');
include('Controllers/Add_To_Cart.php');



$getProducts = $OrderDetails->getProduct();
$show['content'] = $OrderDetails->showProduct($getProducts);

$getlisting = $Product->getAllProducts();


// $product_id = (int) $_GET['product'] ;
// $product= $Product->getProductById($product_id);


$View->header();
include('Templates/_order_details.php');
$View->footer();