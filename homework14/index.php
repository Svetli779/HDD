<?php
session_start();
require_once "DB_VALID/Validate.php";
require_once "DB_VALID/DB.php";
require_once "functions/html.php";
require_once "pages/home.php";
require_once "pages/users.php";
$contoller = Validate::get('controller','string', 'home');
$action = Validate::get('action', 'string', 'index');
if( class_exists($contoller) )
{
    $obj = new $contoller();
    call_user_func_array( array($obj, $action), []);
} else {
    //
    echo "nqma!";
}