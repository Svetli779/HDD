<?php
session_start();

function getHost(){
            return "http://localhost/class.ex/localproject/";
        }
if(!isset($_SESSION['basket']))
    {
       $_SESSION['basket'] = array();
    }
        $servername = "localhost";
	$username = "root";
        $password = "";
	$dbname = "accessories_shop";
	
	$connection = mysqli_connect($servername, $username, $password, $dbname);
			
	if (!$connection) {
            die('Connect Error (' . mysqli_connect_errno() . ') '.mysqli_connect_error() );
	}
        	mysqli_set_charset($connection, "utf8");