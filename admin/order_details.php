<?php 
session_start();
require_once('../Config.php');
require_once('../Controllers/Order_details.php');


$orders = $OrderDetails->getOrders();

include("Header.php");
include('../Templates/_admin_order_details.php');
include("Footer.php");