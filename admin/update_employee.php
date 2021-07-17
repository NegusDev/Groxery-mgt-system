<?php 
require_once('../Config.php');
require_once('../Controllers/Employee.php');


$employee_id = (int)$_GET['id'];
$id = $Salesman->getEmployeeById($employee_id);



$View->header();
include('../Templates/_update_employee.php');
$View->footer();