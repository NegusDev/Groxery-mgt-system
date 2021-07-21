<?php
session_start();
require_once('Config.php');
//  echo "\u{1F648}"; empjii

$getOrders = $Order->getAllOrders();
$page['content'] = $Order->viewAllOrders($getOrders);

$View->header();
include('Templates/_order.php');
$View->footer();