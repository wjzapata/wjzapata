<?php
require_once('Employee.php');

$employee = new Employee(60);
var_dump($employee->getUserId());
var_dump($employee->getPassword());

echo '<br><br>';

$employee->setName('Walter');
$employee->setLastname('Zapata');

var_dump($employee->getFullName());

echo '<br><br>';

?>
