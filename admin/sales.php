<?php
session_start();
require_once('../Config.php');
require_once('../Controllers/Employee.php');


$getusers = $Salesman->getSalesman();


$View->header();
include('../Templates/_admin_sales.php');
$View->footer();