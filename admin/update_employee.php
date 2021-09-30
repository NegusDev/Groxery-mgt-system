<?php 
session_start();
require_once('../Config.php');
require_once('../Controllers/Employee.php');


$employee_id = (int)$_GET['id'];
$id = $Salesman->getEmployeeById($employee_id);



include("Header.php");
include('../Templates/_update_employee.php');
include("Footer.php");