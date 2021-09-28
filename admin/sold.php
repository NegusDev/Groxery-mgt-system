<?php
session_start();
require_once('../Config.php');
require_once('../Controllers/Order_details.php');


$getsold = $Order->getAllOrders();

include("Header.php");
include('../Templates/_admin_sold.php');
include("Footer.php");