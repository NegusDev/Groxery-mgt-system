<?php
session_start();
require_once('Config.php');
//  echo "\u{1F648}"; emojii

$getOrders = $Order->getAllOrders($_SESSION['salesman']);
$page['content'] = $Order->viewAllOrders($getOrders);

$View->header();
include('Templates/_order.php');
$View->footer();