<?php
session_Start();
ob_start();
/**
 * @var Product $Product
 */

include('../Config.php');
include('../Controllers/Product.php');


$product_id = (int)$_GET['update'];
$update = $Product->getProductById($product_id);

$get = $Uom->getUom('uom');
$page['content'] = $Uom->ShowUom($get);


include("Header.php");
include('../Templates/_update_product.php');
include("Footer.php");