<?php
session_start();
require_once('../Config.php');
include('../Controllers/Product.php');

// $product_id = (int) $_GET['update'];
// $update= $Product->getProductById($product_id );

$getproducts = $Product->getAllProducts();
$page['content'] = $Product->viewAllProducts($getproducts);

$get = $Uom->getUom('uom');
$show['content'] = $Uom->ShowUom($get);

include("Header.php");
include('../Templates/_admin_product.php');
include("Footer.php");