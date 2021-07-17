<?php 
require_once('../Config.php');
// require_once('../Controllers/Order_details.php');


$orders = $OrderDetails->getOrders();

$View->header();
include('../Templates/_admin_order_details.php');
$View->footer();