<?php
ob_start();

//MySQL Connection
require ('database/DBController.php');

//Product Require
require ('database/Product.php');

//Cart Require
require ('database/Cart.php');

//DBController
$db = new DBController();

//Product Class
$product = new Product($db);

$product_shuffle = $product->getData();

//Cart Class
$Cart = new Cart($db);
