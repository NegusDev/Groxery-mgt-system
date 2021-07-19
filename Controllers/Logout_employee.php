<?php

session_start();

if (isset($_SESSION['salesman'])) {
    unset($_SESSION['salesman']);

    header("location:./employee_login.php");
}