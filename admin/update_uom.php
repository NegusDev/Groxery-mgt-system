<?php
session_start();
require_once('../Config.php');
require_once('../Controllers/Uom.php');


$uom_id = (int)$_GET['id'];
$id = $Uom->getUomById($uom_id);


$View->header();
include('../Templates/_update_uom.php');
$View->footer();