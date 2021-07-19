<?php
session_Start();
ob_start();
/**
 * @var Product $Product
 * @var View $View
 */

include('Config.php');
include('Controllers/Update_product.php');


$product_id = (int)$_GET['update'];
$update = $Product->getProductById($product_id);

$get = $Uom->getUom('uom');
$page['content'] = $Uom->ShowUom($get);


$View->header();
include('Templates/_update_product.php');
$View->footer();