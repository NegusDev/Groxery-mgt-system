<?php
session_start();
require_once('../Config.php');
require_once('../Controllers/Uom.php');

$getuoms = $Uom->getUom('uom');

$View->header();
include('../Templates/_uom.php');
$View->footer();