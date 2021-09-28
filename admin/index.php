<?php 
session_start();
include('../Config.php');

$admin_rows = $Product-> getTotalRows($table = 'admin');
$product_rows = $Product-> getTotalRows($table = 'product_stock');
$sale_rows = $Product-> getTotalRows($table = 'salesman');
$details_rows = $Product-> getTotalRows($table = 'order_details');
$order_rows = $Product-> getTotalRows($table = 'orders');
$uom_rows = $Product-> getTotalRows($table = 'uom');


$View->header();

include('../Templates/_dashboard.php');

$View->footer();