<?php
require_once('../Config.php');
require_once('../Controllers/Order_details.php');


$getsold = $Order->getAllOrders();

$View->header();
include('../Templates/_admin_sold.php');
$View->footer();