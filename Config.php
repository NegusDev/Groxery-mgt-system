<?php

define('BASE_DIR', __DIR__);

include(BASE_DIR . '/System/Classes/DbController.php');
include(BASE_DIR . '/System/Classes/View.php');
include(BASE_DIR . '/System/Classes/Product.php');
include(BASE_DIR . '/System/Classes/Uom.php');
include(BASE_DIR . '/System/Classes/Salesman.php');
include(BASE_DIR . '/System/Classes/Order.php');
include(BASE_DIR . '/System/Classes/OrderDetails.php');


$Db = new DbController();
$View = new View();
$Product = new Product($Db);
$Uom = new Uom();
$Order = new Order($Db);
$OrderDetails = new OrderDetails();
$Salesman = new Salesman($Db);

$page = [];
$show = [];
$addRow = [];
