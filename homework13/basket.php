<?php
include 'all.php';
$product_id = $_POST['product_id'];

$_SESSION['basket'][] = $product_id;

header("Location:list_of_products.php");
