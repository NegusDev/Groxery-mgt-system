<?php 

require_once('Config.php');
var_dump($Order->getTotalAmount());

$getOrders = $Order->getAllOrders();
$page['content'] = $Order->viewAllOrders($getOrders);

$View->header();
include('Templates/_order.php');
$View->footer();