<?php
include('Config.php');
include('Controllers/AddProduct.php');

$get = $Uom->getUom('uom');
$page['content'] = $Uom->ShowUom($get);

$View->header();

require_once('Templates/_addproduct.php');

$View->footer();