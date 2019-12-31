<?php
//wo people can be named "Jack". We can separate them by their surname. In the same way, two classes can have the same name. We can separate them by namespacing.
use customer\Person as customer;
use employee\Person as employee;
// use my\sameer\pdo\Pdo;
// include "classes/pdo.php";
// $pdo = new Pdo();
// echo $pdo->getvalue();
include "classes/customer.php";
include "classes/employee.php";

$customer = new customer();
$customer->getvalue();
$employee = new employee();
$employee->getvalue();
?>