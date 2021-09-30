<?php
session_start();
require_once('../Config.php');
require_once('../Controllers/Uom.php');


$uom_id = (int)$_GET['id'];
$id = $Uom->getUomById($uom_id);


include("Header.php");
include('../Templates/_update_uom.php');
include("Footer.php");