<?php
declare(strict_types=1);
/**
 * @var Product $Product
 * @var View $View
 */

include('../Config.php');
include('../Controllers/Product.php');

$product_id = (int)$_GET['product'];
$product = $Product->getProductById($product_id);

// $result = $Product->deleteProduct(23);

$View->header();
include('../Templates/_delete_product.php');
$View->footer();