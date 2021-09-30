<?php
session_start();
require_once('../Config.php');
require_once('../Controllers/Uom.php');

$getuoms = $Uom->getUom('uom');

include("Header.php");
include('../Templates/_uom.php');
include("Footer.php");