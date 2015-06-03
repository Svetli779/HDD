<?php
require_once 'employee.php';
require_once 'policeman.php';
require_once 'doctor.php';
$doctror= new Doctor(14,308,5600,12,12);
$doctror->schedule();
$policeman= new Policeman(12,264,3500,"sergeant");
$policeman->myRang();
$employee= new Employee();
$employee->work();