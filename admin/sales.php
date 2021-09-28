<?php
session_start();
require_once('../Config.php');
require_once('../Controllers/Employee.php');


$getusers = $Salesman->getSalesman();


include("Header.php");
include('../Templates/_admin_sales.php');
include("Footer.php");